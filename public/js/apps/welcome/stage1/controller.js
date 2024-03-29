define([
    'base',
    'events',
    'entities/user',
    'entities/user_dialogue_interaction',
    'apps/welcome/stage1/views/layout'
], function (
    Base,
    Event,
    User,
    UserDialogueInteraction,
    LayoutView
) {

    return _.patch(Base.Controller.extend({

        mixins : ['DialogueController'],

        initialize : function (options) {
            this.region = options.region;
            this.user   = User.current();
            this.view   = new LayoutView({
                'model' : this.user
            });

            this.listenTo(this.view, 'form:submit', this.onFormSubmit);
            this.listenTo(this.view, 'destroy', this.destroy);
            this.listenTo(this.view, 'show', this.recordInteraction);

            this.listenTo(this.user, 'sync error invalid', this.onSyncErrorOrInvalid);
            this.listenTo(this.user, 'sync', this.onSyncSuccess);
            this.listenTo(this.user, 'error', this.onSyncError);
            this.listenTo(this.user, 'invalid', this.onInvalid);

            this.region.show(this.view);
        },

        recordInteraction: function()
        {
            this.timestamp = Date.now();
            this.interaction = new UserDialogueInteraction({"uuid": this.user.id, "name": "welcome"});
            this.interaction.save();
        },

        onFormSubmit: function() {
            this.view.destroy();

            var url = laroute.route('tutor.profile.show', {
                'uuid' : this.user.get('uuid'),
                'section' : 'welcome/2'
            });

            if(this.interaction && this.timestamp) this.interaction.save({duration: Date.now() - this.timestamp}, {patch: true});

            this.app.history.navigate(url, {trigger: true});
        },

        onDestroy : function ()
        {
            var url = laroute.route('tutor.profile.show', {
                'uuid' : this.user.get('uuid')
            });

            this.app.history.back(url);
        }

    }));

});
