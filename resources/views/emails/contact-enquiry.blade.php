<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Enquiry — Anshivya Group</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f1f5f9; font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f1f5f9; padding: 40px 10px;">
        <tr>
            <td align="center">
                <!-- MAIN EMAIL CONTAINER -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 620px; background-color: #ffffff; border-radius: 20px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);">
                    
                    <!-- HEADER BANNER WITH BRANDING & LOGO -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 32px 40px; text-align: left;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td>
                                        <div style="display: inline-block; vertical-align: middle;">
                                            <!-- COMPANY LOGO BADGE -->
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="width: 44px; height: 44px; background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%); border-radius: 12px; text-align: center; vertical-align: middle; color: #020617; font-weight: 800; font-size: 22px; font-family: sans-serif;">
                                                        A
                                                    </td>
                                                    <td style="padding-left: 14px;">
                                                        <div style="color: #ffffff; font-weight: 800; font-size: 18px; tracking-tight: -0.5px;">ANSHIVYA GROUP</div>
                                                        <div style="color: #f59e0b; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-top: 2px;">Corporate HR Solutions &amp; Talent</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- INTRO BADGE & TITLE -->
                    <tr>
                        <td style="padding: 36px 40px 20px 40px;">
                            <div style="display: inline-block; background-color: #fef3c7; border: 1px solid #fde68a; color: #b45309; padding: 6px 14px; border-radius: 9999px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px;">
                                🔔 NEW CONTACT ENQUIRY
                            </div>
                            <h1 style="margin: 0; color: #0f172a; font-size: 22px; font-weight: 800; line-height: 1.3;">
                                Someone wants to contact you regarding <span style="color: #d97706;">{{ $enquiry->service_required }}</span>.
                            </h1>
                            <p style="margin-top: 10px; color: #64748b; font-size: 14px; line-height: 1.6;">
                                A new enquiry has been submitted on the Anshivya Group corporate website. Here are the contact details and requirement summary:
                            </p>
                        </td>
                    </tr>

                    <!-- ENQUIRY DETAILS TABLE -->
                    <tr>
                        <td style="padding: 0 40px 24px 40px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f8fafc; border-radius: 14px; border: 1px solid #e2e8f0; overflow: hidden;">
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; width: 35%; color: #64748b; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Sender Name
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #0f172a; font-size: 14px; font-weight: 700;">
                                        {{ $enquiry->full_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #64748b; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Company Name
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #0f172a; font-size: 14px; font-weight: 700;">
                                        {{ $enquiry->company_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #64748b; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Work Email
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #2563eb; font-size: 14px; font-weight: 600;">
                                        <a href="mailto:{{ $enquiry->work_email }}" style="color: #2563eb; text-decoration: none;">{{ $enquiry->work_email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #64748b; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Phone Number
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #0f172a; font-size: 14px; font-weight: 600;">
                                        <a href="tel:{{ str_replace(' ', '', $enquiry->phone_number) }}" style="color: #0f172a; text-decoration: none;">{{ $enquiry->phone_number }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #64748b; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Service Required
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #d97706; font-size: 14px; font-weight: 700;">
                                        {{ $enquiry->service_required }}
                                    </td>
                                </tr>
                                @if(!empty($enquiry->employee_count))
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #64748b; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                                        Positions / Scale
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; color: #0f172a; font-size: 14px; font-weight: 600;">
                                        {{ $enquiry->employee_count }}
                                    </td>
                                </tr>
                                @endif
                            </table>
                        </td>
                    </tr>

                    <!-- MESSAGE CARD -->
                    <tr>
                        <td style="padding: 0 40px 32px 40px;">
                            <div style="background-color: #f1f5f9; border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px;">
                                <div style="color: #475569; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
                                    MESSAGE &amp; REQUIREMENT DETAILS
                                </div>
                                <div style="color: #1e293b; font-size: 14px; line-height: 1.6; white-space: pre-line;">
                                    {{ $enquiry->message }}
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- CALL TO ACTION BUTTON -->
                    <tr>
                        <td style="padding: 0 40px 40px 40px; text-align: center;">
                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" style="display: inline-block; background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%); color: #020617; font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 14px 32px; border-radius: 12px; text-decoration: none; box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);">
                                View Enquiry in Admin Panel &rarr;
                            </a>
                        </td>
                    </tr>

                    <!-- FOOTER DISCLAIMER -->
                    <tr>
                        <td style="background-color: #f8fafc; padding: 24px 40px; border-top: 1px solid #e2e8f0; text-align: center; color: #94a3b8; font-size: 12px; line-height: 1.5;">
                            <div>&copy; {{ date('Y') }} Anshivya Group. All rights reserved.</div>
                            <div style="margin-top: 4px;">This is an automated administrative notification sent from <a href="https://anshivya.com" style="color: #64748b; text-decoration: underline;">anshivya.com</a>.</div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
