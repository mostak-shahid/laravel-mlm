@extends('layouts.backend')

@section('page-title')
    Register
@endsection
@section('sidebar')
    @include('user.menu')
@endsection
@section('content')
    <div class="x_panel">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form class="demo-form">
                    <div class="form-section">
                        <h4 class="text-center">Sponsor And Package</h4>
                        <div class="form-group">
                            <label for="sponsor_id">Sponsor ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="sponsor_id" data-parsley-type="alphanum"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label for="placement_id">Placement ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="placement_id" data-parsley-type="alphanum"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label for="position">Position <span class="text-danger">*</span></label>
                            <select class="custom-select" id="position" required>
                                <option selected value="">Open position list</option>
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pin">Pin <span class="text-danger">*</span></label>
                            <select class="custom-select" id="pin" required>
                                <option selected value="">Open pin list</option>
                                <option value="ae00001">ae00001</option>
                                <option value="ae00002">ae00002</option>
                            </select>
                        </div>
                        {{--<label for="sponsor_id">Sponsor ID:</label>--}}
                        {{--<input type="text" class="form-control" name="sponsor_id" data-parsley-pattern="/^[a-z .'-]+$/i"  data-parsley-pattern-message="Only alphabets are allowed." required />--}}
                    </div>

                    <div class="form-section">
                        <h4 class="text-center">Profile Information</h4>
                        <div class="form-group">
                            <label for="name">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" data-parsley-pattern="/^[a-z .'-]+$/i"
                                   data-parsley-pattern-message="Only alphabets are allowed." required/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="email">Cell Number</label>
                            <input type="tel" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <div class='input-group date' id='myDatepicker2'>
                                <input type='text' name="dob" class="form-control"/>
                                <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="father_name">Father's Name</label>
                            <input type="text" class="form-control" name="father_name"
                                   data-parsley-pattern="/^[a-z .'-]+$/i"
                                   data-parsley-pattern-message="Only alphabets are allowed."/>
                        </div>
                        <div class="form-group">
                            <label for="mother_name">Mother's Name</label>
                            <input type="text" class="form-control" name="mother_name"
                                   data-parsley-pattern="/^[a-z .'-]+$/i"
                                   data-parsley-pattern-message="Only alphabets are allowed."/>
                        </div>
                        <div class="form-group">
                            <label for="nominee_name">Nominee's Name</label>
                            <input type="text" class="form-control" name="nominee_name"
                                   data-parsley-pattern="/^[a-z .'-]+$/i"
                                   data-parsley-pattern-message="Only alphabets are allowed."/>
                        </div>
                        <div class="form-group">
                            <label for="mobile_banking">Mobile Banking Info</label>
                            <input type="tel" class="form-control" name="mobile_banking"/>
                        </div>
                        <div class="form-group">
                            <label for="nominee_relation">Relation With Nominee</label>
                            <select class="custom-select" id="nominee_relation" name="nominee_relation">
                                <option selected value="">Open relationship list</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Son">Son</option>
                                <option value="Dauther">Dauther</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blood_group">Blood Group</label>
                            <select class="custom-select" id="blood_group" name="blood_group">
                                <option selected value="">Open blood group list</option>
                                <option value="A Positive">A Positive (A+)</option>
                                <option value="A Negative">A Negative (A-)</option>
                                <option value="B Positive">B Positive (B+)</option>
                                <option value="B Negative">B Negative (B-)</option>
                                <option value="O Positive">O Positive (O+)</option>
                                <option value="O Negative">O Negative (O-)</option>
                                <option value="AB Positive">AB Positive (AB+)</option>
                                <option value="AB Negative">AB Negative (AB-)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="text-center">Present Address</h4>
                        <div class="form-group">
                            <label for="district">District Name</label>
                            <select class="custom-select" id="district" name="district" required>
                                <option selected value="">Open district list</option>
                                <option value="28">Bagerhat</option>
                                <option value="11">Bandarban</option>
                                <option value="35">Barguna</option>
                                <option value="33">Barisal</option>
                                <option value="34">Bhola</option>
                                <option value="14">Bogra</option>
                                <option value="5">Chandpur</option>
                                <option value="18">Chapai Nawabganj</option>
                                <option value="7">Chittagong</option>
                                <option value="8">Chittagong City</option>
                                <option value="24">Chuadanga</option>
                                <option value="1">Comilla</option>
                                <option value="9">Coxsbazar</option>
                                <option value="51">Dhaka</option>
                                <option value="52">Dhaka City South</option>
                                <option value="53">Dhaka City North</option>
                                <option value="59">Dinajpur</option>
                                <option value="57">Faridpur</option>
                                <option value="2">Feni</option>
                                <option value="62">Gaibandha</option>
                                <option value="41">Gazipur</option>
                                <option value="56">Gopalganj</option>
                                <option value="38">Habiganj</option>
                                <option value="48">Jamalpur</option>
                                <option value="20">Jessore</option>
                                <option value="30">Jhalakathi</option>
                                <option value="29">Jhenaidah</option>
                                <option value="17">Joypurhat</option>
                                <option value="10">Khagrachhari</option>
                                <option value="27">Khulna</option>
                                <option value="47">Kishoreganj</option>
                                <option value="65">Kurigram</option>
                                <option value="25">Kushtia</option>
                                <option value="6">Lakshmipur</option>
                                <option value="60">Lalmonirhat</option>
                                <option value="55">Madaripur</option>
                                <option value="26">Magura</option>
                                <option value="49">Manikganj</option>
                                <option value="22">Meherpur</option>
                                <option value="37">Moulvibazar</option>
                                <option value="54">Munshiganj</option>
                                <option value="46">Mymensingh</option>
                                <option value="19">Naogaon</option>
                                <option value="23">Narail</option>
                                <option value="43">Narayanganj</option>
                                <option value="40">Narsingdi</option>
                                <option value="16">Natore</option>
                                <option value="50">Netrokona</option>
                                <option value="61">Nilphamari</option>
                                <option value="4">Noakhali</option>
                                <option value="13">Pabna</option>
                                <option value="58">Panchagarh</option>
                                <option value="31">Patuakhali</option>
                                <option value="32">Pirojpur</option>
                                <option value="15">Rajshahi</option>
                                <option value="3">Rangamati</option>
                                <option value="64">Rangpur</option>
                                <option value="21">Satkhira</option>
                                <option value="42">Shariatpur</option>
                                <option value="44">Sherpur</option>
                                <option value="12">Sirajganj</option>
                                <option value="39">Sunamganj</option>
                                <option value="36">Sylhet</option>
                                <option value="45">Tangail</option>
                                <option value="63">Thakurgaon</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="post">Post Code</label>
                            <input type="text" class="form-control" name="father_name"
                                   data-parsley-pattern="/^[0-9]{4,5}(?:-[0-9]{4})?$/i"
                                   data-parsley-pattern-message="PLease enter a valid formate."/>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="text-center">Login Information</h4>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" name="username" id="username" required/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required/>
                        </div>
                        <div class="form-group">
                            <label for="confirm">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm" id="confirm"
                                   data-parsley-equalto="#password"
                                   data-parsley-equalto-message="Password does not matched." required/>
                        </div>
                    </div>
                    <div class="form-navigation text-right">
                        <button type="button" class="previous btn btn-secondary">Previous</button>
                        <button type="button" class="next btn btn-secondary">Next</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .input-group-addon {
            padding: 10px 12px;
        }

        .form-section {
            display: none;
        }

        .form-section.current {
            display: inherit;
        }
    </style>

    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset('admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}"
          rel="stylesheet">
@endsection
@section('script')
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('admin/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="{{ asset('admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- parsleyjs -->
    <script src="{{ asset('admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('#myDatepicker2').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            var $sections = $('.form-section');

            function navigateTo(index) {
                console.log(index);
                // Mark the current section with the class 'current'
                $sections
                        .removeClass('current')
                        .eq(index)
                        .addClass('current');
                // Show only the navigation buttons that make sense for the current section:
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex() {
                // Return the current index by looking at which section has the class 'current'
                return $sections.index($sections.filter('.current'));
            }

            // Previous button is easy, just go back
            $('.form-navigation .previous').click(function () {
                navigateTo(curIndex() - 1);
            });

            // Next button goes forward iff current block validates
            $('.form-navigation .next').click(function () {
                $('.demo-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function () {
                    navigateTo(curIndex() + 1);
                });
            });

            // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
            $sections.each(function (index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });
            navigateTo(0); // Start at the beginning
        });
    </script>
@endsection