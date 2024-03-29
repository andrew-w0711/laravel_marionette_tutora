@extends('emails._.layouts.default')

@section('heading')
    Your lesson with {{ $relationship->tutor->first_name }} has been confirmed.
@stop

@section('body')
    Hey {{ $relationship->student->first_name }},<br>
    <br>
    Your lesson with {{ $relationship->tutor->first_name }} has been confirmed. Please review the details of your lesson, and find the tutors contact details below.
    <br>
    <br>
    Email: {{ $relationship->tutor->private->email }}
    <br>
    Phone: {{ $relationship->tutor->private->telephone }}
@stop

@section('details')
    <table border="1" cellpadding="0" cellspacing="0" width="100%" class="detailsTable" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-size: 0;border-collapse: collapse !important;">
        <tbody>
            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Tutor</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $relationship->tutor->first_name }} {{ $relationship->tutor->last_name }}</td>
            </tr>

            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Subject</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $lesson->subject->title }}</td>
            </tr>

            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Date</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $booking->date->long }}{{ $lesson->schedule ? '*' : '' }}</td>
            </tr>

            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Time</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $booking->time->start }} - {{ $booking->time->finish }}</td>
            </tr>

            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Location</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $booking->location }}</td>
            </tr>

            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Price</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $booking->price }}</td>
            </tr>

            <tr>
                <th style="font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-width: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">Booking Reference</th>
                <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: Helvetica;font-size: 16px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;border-size: 1px;border-color: #ffffff;padding-top: 6px;padding-bottom: 6px;padding-right: 24px;padding-left: 24px;color: #ffffff !important;">{{ $booking->uuid }}</td>
            </tr>
        </tbody>
    </table>
@stop

@section('action')
    <a href="{{ route('student.dashboard.index') }}" class="btn__anchor" style="color:#ffffff !important; text-decoration: none !important;">Go to your dashboard</a>
@stop
