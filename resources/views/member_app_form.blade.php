<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Member Application Form</title>
    <style>
        body {
            font-family: Time New Roman;
        }

        td {
            padding-left: 5px;
        }
        p {
            margin: 8px;
        }
        td p {
            /* margin-bottom: 0; */
        }

        .tr-head td p {
            margin: 0;
        }

        .head-title {
            color: blue;
            /* padding-left: 20%; */
            font-size: 18px;
        }
        .head-label {
            background: #ececec;
            text-transform: uppercase;
            margin: 5px;
        }
        .foot {
            display: -webkit-inline-box;
            padding: 0;
        }
        .row-2 td {
            height: 300px
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10" style="padding: 50px 0 50px;">
                <div class="head-title">
                    <p align="center" style="margin: 0;">
                        <strong>
                            Cambodia-Japan Association for Business &amp; Investment (CJBI)
                        </strong>
                    </p>
                    <p align="center" style="margin-top: 0;">
                        <strong>Membership Application Form </strong>
                        <strong>(For applicants whose companies registered in Cambodia)</strong>
                    </p>
                </div>

                <table border="1" cellspacing="0" cellpadding="0" width="100%">
                    <tbody>
                        <tr class="tr-head">
                            <td width="50%" colspan="3" valign="top">
                                <p>
                                    <strong>
                                        <em>
                                            Please complete and return this form with the
                                            following documents:
                                        </em>
                                    </strong>
                                </p>
                                <p>
                                    1. Applicant's CV (Bio Profile)
                                </p>
                                <p>
                                    2. Valid certification of a company/an organization
                                </p>
                                <p style="padding-left: 20px;">
                                    2-A. Company's registration with the Ministry of Commerce
                                </p>
                                <p style="padding-left: 20px;">
                                    2-B. Valid patent
                                </p>
                                <p style="padding-left: 20px;">
                                    *If your company is not registered in the Ministry of
                                    Commerce, please submit only 2-B.
                                </p>
                                <p>
                                    <strong><em>To:</em></strong>
                                </p>
                                <p>
                                    CJBI Secretariat Email:
                                    <a href="mailto:secretary.general@cjbi.asia">
                                        secretary.general@cjbi.asia
                                    </a>
                                </p>
                                <p>
                                    <strong><em>OR</em></strong>
                                </p>
                                <p>
                                    RUPP-CJCC, Russian Confederation Blvd.,Tuol Kork,
                                </p>
                                <p>
                                    Phnom Penh, Cambodia P.O. Box 1290 Tel: 012 77 16 76 / 098
                                    998 908
                                </p>
                            </td>
                            <td width="20%" valign="top">

                                    &#9744; New Member
                                <p>
                                    &#9744; Renewed Member
                                </p>
                                <p>
                                    Ref. No/ID:
                                </p>
                                <p>
                                    ……………….
                                </p>
                            </td>
                            <td width="25%" colspan="2" style="border: #9999ff 2px solid;background: #ececec;">
                                <table cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <p align="center">
                                                        Photo
                                                    </p>
                                                    <p align="center">
                                                        Attach digital photo
                                                    </p>
                                                    <p align="center">
                                                        OR Paste
                                                    </p>
                                                    <p align="center">
                                                        (4 x 6) photo
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td class="head-label" width="100%" colspan="6" valign="top">
                                <p align="center">
                                    Personal Information
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">
                                <p>
                                    In English
                                </p>
                            </td>
                            <td width="40%" colspan="2">
                                <p>
                                    Family Name: {{$member_data->fam_name}}
                                </p>
                            </td>
                            <td width="39%" colspan="3">
                                <p>
                                    Given Name: {{$member_data->give_name}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">
                                <p>
                                    In KH/JP/others
                                </p>
                            </td>
                            <td width="40%" colspan="2">
                                <p>
                                    Family Name: {{array_key_exists('fam_name_lan',$member_data)?$member_data->fam_name_lan:''}}
                                </p>
                            </td>
                            <td width="39%" colspan="3">
                                <p>
                                    Given Name: {{array_key_exists('give_name_lan',$member_data)?$member_data->give_name_lan:''}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">
                                <p>
                                    Gender: @if($member_data->gender == 'female') &#9745; @else &#9744; @endif  F @if($member_data->gender == 'male') &#9745; @else &#9744; @endif M
                                </p>
                            </td>
                            <td width="40%" colspan="2">
                                <p> 
                                    Date of Birth: {{$member_data->dob}}
                                </p>
                            </td>
                            <td width="39%" colspan="3">
                                <p>
                                    Nationality: {{$member_data->nationality}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="41%" colspan="3">
                                <p>
                                    Mobile Phone: {{$member_data->per_phone}}
                                </p>
                            </td>
                            <td width="58%" colspan="3">
                                <p>
                                    Personal Email: {{$member_data->email}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    Home Address: {{$member_data->home_address}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    Job Title: {{$member_data->job_title}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="head-label" width="100%" colspan="6">
                                <p align="center">
                                    COMPANY INFORMATION FOr CJBI registration
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    Company Name (In English): {{$member_data->com_name}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="41%" colspan="2">
                                <p>
                                    Years of Establishment: {{$member_data->year_estab}}
                                </p>
                            </td>
                            <td width="58%" colspan="4">
                                <p>
                                    Type of Business: {{$member_data->buss_type}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="41%" colspan="2">
                                <p>
                                    Company Phone: {{$member_data->com_phone}}
                                </p>
                            </td>
                            <td width="58%" colspan="4">
                                <p>
                                    Company Email: {{$member_data->com_email}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    Company Address: {{$member_data->com_address}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    Company Website: {{$member_data->com_website}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    Company Description: {!! $member_data->com_description !!}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="head-label" width="100%" colspan="6">
                                <p align="center">
                                    Applicant’s Signature
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <p>
                                    <em>
                                        I confirm the above information is complete and correct
                                        and I will give a pledge to abide by the laws and
                                        regulations of the Kingdom of Cambodia and Japan as
                                        well as CJBI’s statute, internal regulation and
                                        decisions.
                                    </em>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="2">
                                <p>
                                    Signature:
                                </p>
                            </td>
                            <td width="100%" colspan="4">
                                <p>
                                    Date:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6">
                                <h1 style="font-size: 1rem;font-weight: bold;">
                                    Note: You are required to pay an annual membership fee of
                                    USD 100 and inform any changes the above mentioned
                                    information and the valid patent if your application form
                                    is approved.
                                </h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="head-label" width="100%" colspan="6">
                                <p align="center">
                                    REFEREE’S INFORMATION
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="2">
                                <p>
                                    Name of referee (In English) : {{$member_data->ref_name}}
                                </p>
                            </td>
                            <td width="100%" colspan="4">
                                <p>
                                &#9744; Board of Directors of CJBI / &#9744; Executive Committee of CJBI
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="2">
                                <p>
                                    Phone : {{$member_data->ref_phone}}
                                </p>
                            </td>
                            <td width="100%" colspan="4">
                                <p>
                                    Email : {{$member_data->ref_email}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="51%" colspan="2">
                                <p>
                                    Referee’s signature:
                                </p>
                            </td>
                            <td width="48%" colspan="4">
                                <p>
                                    Date:
                                </p>
                            </td>
                        </tr>

                        <tr height="0">
                            <td width="139">
                            </td>
                            <td width="151">
                            </td>
                            <td width="66">
                            </td>
                            <td width="64">
                            </td>
                            <td width="152">
                            </td>
                            <td width="121">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12 foot">
                    <div class="col-md-6">
                        <p align="left">
                            Official Use Only: 
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p align="right">
                            Phnom Penh, Date……………………………… <!-- Cambodia-Japan Association for Business and Investment -->
                        </p>
                    </div> 
                </div>
                
                <!-- <p style="font-size: 18px;color: blue;">-->
                <!--    <strong>Information for Posting in CJBI Website</strong>-->
                <!--</p>-->
                <!--<table border="1" cellspacing="0" cellpadding="0" width="100%">-->
                <!--    <tbody>-->
                <!--        <tr class="row-2">-->
                <!--            <td width="161">-->
                <!--                <p align="center">-->
                <!--                    <strong>Picture</strong>-->
                <!--                </p>-->
                <!--                <p align="center">-->
                <!--                    <strong>(in business manner)</strong>-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td width="180">-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p align="center">-->
                <!--                    <strong>Picture Size: 4 x 6</strong>-->
                <!--                </p>-->
                <!--                <p align="center">-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p align="center">-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p align="center">-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td width="359">-->
                <!--                <p>-->
                <!--                    <strong>Name in Latin: </strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong></strong>-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    <strong>Name in Khmer: </strong>-->
                <!--                </p>-->
                <!--            </td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td width="161">-->
                <!--                <p>-->
                <!--                    Business Sector:-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td colspan="3">-->
                <!--                <table>-->
                <!--                    <tr>-->
                <!--                        <td width="350" colspan="2">-->
                <!--                            <p>-->
                <!--                                &#9744; Training (Education/Capacity Building)     -->
                <!--                            </p>-->
                <!--                            <p>-->
                <!--                                &#9744; Banking (Financial Institution)                -->
                <!--                            </p>-->
                <!--                            <p>-->
                <!--                                &#9744; Hospital &amp; Medical Services             -->
                <!--                            </p>-->
                <!--                            <p>-->
                <!--                                &#9744; Engineering/Construction                  -->
                <!--                            </p>-->
                <!--                            <p>-->
                <!--                                &#9744; Travel &amp; Tourism                             -->
                <!--                            </p>-->
                <!--                            <p>-->
                <!--                                &#9744; Others-->
                <!--                            </p>-->
                <!--                        </td>-->
                <!--                        <td width="180" style="padding-bottom: 32px;">-->
                <!--                            <p>&#9744; Agriculture</p>-->
                <!--                            <p>&#9744; Trading</p>-->
                <!--                            <p>&#9744; Consulting</p>-->
                <!--                            <p>&#9744; Architecture</p>-->
                <!--                            <p>&#9744; Media</p>-->
                <!--                        </td>-->
                <!--                        <td style="padding-bottom: 32px;">-->
                <!--                            <p>&#9744; Hotel (Hospitality)</p>-->
                <!--                            <p>&#9744; Real Estate</p>-->
                <!--                            <p>&#9744; Tax Agency</p>-->
                <!--                            <p>&#9744; Event Organizer</p>-->
                <!--                            <p>&#9744; Food and Beverage</p>-->
                <!--                        </td>-->
                <!--                    </tr>-->
                <!--                </table>-->
                <!--            </td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td width="161" valign="top" height="150px">-->
                <!--                <p>-->
                <!--                    Company Profile:-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td width="539" colspan="2" valign="top">-->
                <!--                <p>-->
                <!--                    (Max: 200 words)-->
                <!--                </p>-->
                <!--            </td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td width="161" valign="top">-->
                <!--                <p>-->
                <!--                    Number of Employee:-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    Investment Capital:-->
                <!--                </p>-->
                <!--                <p>-->
                <!--                    Year of Establishment:-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td width="539" colspan="2" valign="top">-->
                <!--            </td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td width="161" valign="top" height="150px">-->
                <!--                <p>-->
                <!--                    Personal Background:-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td width="539" colspan="2" valign="top">-->
                <!--                <p>-->
                <!--                    (Max: 200 words)-->
                <!--                </p>-->
                <!--            </td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td width="161" valign="top" height="150px">-->
                <!--                <p>-->
                <!--                    Prospective Business Partnership:-->
                <!--                </p>-->
                <!--            </td>-->
                <!--            <td width="539" colspan="2" valign="top">-->
                <!--                <p>-->
                <!--                    (Max: 200 words)-->
                <!--                </p>-->
                <!--            </td>-->
                <!--        </tr>-->
                <!--    </tbody>-->
                <!--</table>-->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>