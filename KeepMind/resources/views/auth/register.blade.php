@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/survey.css')}}">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Complete%20Register.css">
    <link rel="stylesheet" href="fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/survey.css">
    @endsection
@section('content')

    <div class="row wrap">
        <div class="col-lg-12">
            <div id='progress'><div id='progress-complete'></div>
            </div>
            <form id="SignupForm" method="POST" action="{{ route('register')}}" >
                @csrf
                <fieldset>
                    <legend>Account information</legend>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input id="Email" name="email" type="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input id="Password" name="password" type="password" aria-describedby="passwordHelpBlock" class="form-control" required />
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="ConfirmPassword">Confirm Password</label>
                        <input id="ConfirmPassword" type="password" class="form-control" />
                    </div>
                </fieldset>
                <fieldset>
                    <legend>User information</legend>

                                        <div class="form-group">
                                            <div class="file-upload">
                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                                <div class="image-upload-wrap">
                                                    <input id="Image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <h3>Drag and drop a file or select add Image</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input id="firstname" name="firstname" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input id="lastname" name="lastname" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Birth Date</label>
                        <input id="birth_date" name="birth_date" type="date" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Country" class=" control-label">Country</label>
                        <select id="Country" name="location" class="form-control">
                            <option value="CA">Canada</option>
                            <option value="US">United States of America</option>
                            <option value="GB">United Kingdom (Great Britain)</option>
                            <option value="AU">Australia</option>
                            <option value="JP">Japan</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Island</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua & Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahama</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="VG">British Virgin Islands</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CK">Cook Iislands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="CI">Ivory Coast</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="FX">France, Metropolitan</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard & McDonald Islands</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IR">Islamic Republic of Iran</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Monserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="RE">Runion</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome & Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SH">St. Helena</option>
                            <option value="KN">St. Kitts and Nevis</option>
                            <option value="PM">St. Pierre & Miquelon</option>
                            <option value="VC">St. Vincent & the Grenadines</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard & Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad & Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks & Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="VI">United States Virgin Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican City State (Holy See)</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="WF">Wallis & Futuna Islands</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZR">Zaire</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Expirence information</legend>
                    <h1>Do A Placemnet Test ?</h1>
                    <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum.
                        Nam consequat neque quis sapien viverra convallis. In non tempus lorem.
                        Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum.
                        Nam consequat neque quis sapien viverra convallis. In non tempus lorem
                        Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum.
                        Nam consequat neque quis sapien viverra convallis. In non tempus lorem
                        Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum.
                        Nam consequat neque quis sapien viverra convallis. In non tempus lorem</p>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input radio PlacementRadio" type="radio" name="gridRadios" id="gridRadios1" value="yes" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input PlacementRadio" type="radio" name="gridRadios" id="gridRadios2" value="no">
                            <label class="form-check-label" for="gridRadios2">
                                No
                            </label>
                        </div>
                    </div>
                    <!-- Modal -->
{{--                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-xl">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">Testing</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <div id="surveyContainer"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </fieldset>
                <button id="SaveAccount" type="submit" class="btn btn-primary submit">Submit form</button>
            </form>
        </div>
    </div>
@endsection
@section('scriptJs')
    <script src="{{asset('js/formWizardScript.js')}}"></script>
    <script src="{{asset('js/jquery.formtowizard.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/MultiStep.min.js')}}"></script>
    <script src="{{asset('js/uploadImage.js')}}"></script>
    <script src="{{asset('js/survey.js')}}"></script>
    <script src="{{asset('js/SurveyScript.js')}}"></script>
    <script src="js/axios.min.js"></script>

    <script>

        $('#username').change(function (e) {
            var name = $('#username').val()
            let form = new FormData()
            form.append('name',name)
            axios.post('api/user/nameExist', form).then(function (res) {
                console.log(res.data)
                if (res.data == false) {
                    $('#username').addClass("is-invalid")

                }else {
                    $('#username').removeClass("is-invalid")
                }
            })
            console.log(888)
            validate()
        })


        $('#Email').change(function (e) {
            var email = $('#Email').val()
            let form = new FormData()
            form.append('email',email)
            axios.post('api/user/emailExist', form).then(function (res) {
                console.log(res.data)
                if (res.data == false) {
                    $('#Email').addClass("is-invalid")
                }else {
                    $('#Email').removeClass("is-invalid")
                }
            })
            validate()
        })


        $('#Password').change(function (e) {
            if ( $('#Password').val().length >= 8 && $('#Password').val().length <= 20 ){
                $('#Password').removeClass("is-invalid")

                if($('#ConfirmPassword').val() == $('#Password').val()){
                    $('#ConfirmPassword').removeClass("is-invalid")
                }else {
                    $('#ConfirmPassword').addClass("is-invalid")
                }
            } else {
                $('#Password').addClass("is-invalid")
                $('#ConfirmPassword').addClass("is-invalid")
            }
            validate()
        })


        $('#ConfirmPassword').change(function (e) {
            if($('#ConfirmPassword').val() == $('#Password').val()){
                $('#ConfirmPassword').removeClass("is-invalid")
            }else {
                $('#ConfirmPassword').addClass("is-invalid")
            }
            validate()
        })

        $('#SignupForm').submit(function (e) {
            e.preventDefault()
            var email = $('#Email').val()
            var name = $('#username').val()
            var password = $('#Password').val()
            var image = 0;

            if($('#Image')[0].files.length != 0){image = $('#Image')[0].files[0]}

            var firstName = $('#firstname').val()
            var lastName = $('#lastname').val()
            var birth_date = $('#birth_date').val()
            var country = $('#Country').val()
            var level = 0;
            let form = new FormData()
            form.append('email',email)
            form.append('password',password)
            form.append('name',name)
            form.append('image',image)
            form.append('firstName',firstName)
            form.append('lastName',lastName)
            form.append('phone',birth_date)
            form.append('country',country)
            form.append('level',level)

            axios.post('api/Register',form).then(function (res) {
                if(res.data.status) {
                    localStorage.setItem('token', res.data.token)
                    window.location.href = '/Dashboard'
                    console.log(image)
                }
                else{
                    alert("email is used")
                }
            }).catch(function (e) {
                console.log(e)
            })
        })

        function validate() {
            console.log(777)
            if ($('#Password').hasClass("is-invalid") || $('#username').hasClass("is-invalid") || $('#Email').hasClass("is-invalid") || $('#ConfirmPassword').hasClass("is-invalid")) {
                $('#step0Next').attr("disabled",true)
            }else {
                $('#step0Next').attr("disabled",false)
            }
        }
    </script>
    @endsection
