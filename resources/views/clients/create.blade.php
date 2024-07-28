@extends('layouts.app')

@section('content')


<div class='main-content app-content'>
    <div class='container-fluid'>
        <div class='d-flex align-items-center justify-content-between my-3 page-header-breadcrumb'></div>
        <div class='row'>
            <div class='col-12'>

            </div>
            <div class='col-xl-12'>
                <div class='card custom-card'>
                    <div class='card-body p-3'>
                        <div class='row'>
                            <div class='col-7 mt-2'>
                                <button class='btn btn-primary w-100'>
                                    Clients - Add New
                                </button>
                            </div>
                            <div class='col-5 mt-2'>
                                <a class='btn btn-danger w-100' href='/merchanthq/clients'>
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class='card custom-card'>
                    <div class='card-body'>
                        <form class="simple_form new_client" id="new_client" autocomplete="nope" novalidate="novalidate"
                              enctype="multipart/form-data" action="/merchanthq/clients" accept-charset="UTF-8"
                              method="post"><input type="hidden" name="authenticity_token"
                                                   value="FxF8mXoTtejQA8whF1HJatDKfMB0vigYbY5cONcwx4qcwdaVol-qmvzNB9hHZzbWQsIOSvPD2kCi-dA4w3s-BA"
                                                   autocomplete="off"/>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>
                                            Industry
                                        </label>
                                        <select data-placeholder="Business Type" label="false"
                                                class="select required js-example-placeholder-single form-control"
                                                required="required" aria-required="true" name="client[business_type_id]"
                                                id="client_business_type_id">
                                            <option value="" label=" "></option>
                                            <option value="1">Sole Proprietorship</option>
                                            <option value="2">Partnership</option>
                                            <option value="3">General Partnership</option>
                                            <option value="4">Corporation</option>
                                            <option value="5">S Corporation</option>
                                            <option value="6">C Corporation</option>
                                            <option value="7">Limited Partnership</option>
                                            <option value="8">Benefit Corporation</option>
                                            <option value="9">Limited Liability Company</option>
                                            <option value="10">Nonprofit</option>
                                            <option value="11">Business Funding</option>
                                            <option value="12">Cooperative</option>
                                            <option value="13">Joint Venture</option>
                                            <option value="14">Limited Company</option>
                                            <option value="15">Social Enterprise</option>
                                            <option value="16">Social Enterprise</option>
                                            <option value="17">Government Corporation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>
                                            Agency
                                        </label>
                                        <select data-placeholder="Agency" label="false"
                                                class="select required js-example-placeholder-single form-control"
                                                required="required" aria-required="true" name="client[agency_id]"
                                                id="client_agency_id">
                                            <option value="" label=" "></option>
                                            <option value="2">MPC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>Name</label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[name]" id="client_name"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>Prefix (1-3) Characters</label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[prefix]"
                                               id="client_prefix"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>Phone</label>
                                        <input label="false" class="string tel required form-control"
                                               required="required" aria-required="true" type="tel" name="client[phone]"
                                               id="client_phone"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>Email</label>
                                        <input label="false" class="string email required form-control"
                                               required="required" aria-required="true" type="email"
                                               name="client[email]" id="client_email"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'><span class="translation_missing"
                                                                                        title="translation missing: en.panel.whatsapp">Whatsapp</span></label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[whatsapp]"
                                               id="client_whatsapp"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'><span class="translation_missing"
                                                                                        title="translation missing: en.panel.facebook">Facebook</span></label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[facebook]"
                                               id="client_facebook"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'><span class="translation_missing"
                                                                                        title="translation missing: en.panel.twitter">Twitter</span></label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[twitter]"
                                               id="client_twitter"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'><span class="translation_missing"
                                                                                        title="translation missing: en.panel.telegram">Telegram</span></label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[telegram]"
                                               id="client_telegram"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'><span class="translation_missing"
                                                                                        title="translation missing: en.panel.instagram">Instagram</span></label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[instagram]"
                                               id="client_instagram"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>Website</label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[website]"
                                               id="client_website"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'><span class="translation_missing"
                                                                                        title="translation missing: en.panel.fax">Fax</span></label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[fax]" id="client_fax"/>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>
                                            Country
                                        </label>
                                        <select data-placeholder="Country" label="false"
                                                class="select required js-example-placeholder-single select-countries form-control"
                                                required="required" data-url="/json/states" aria-required="true"
                                                name="client[country]" id="client_country">
                                            <option value="" label=" "></option>
                                            <option value="8">Anguilla</option>
                                            <option value="9">Antarctica</option>
                                            <option value="10">Antigua And Barbuda</option>
                                            <option value="11">Argentina</option>
                                            <option value="12">Armenia</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="14">Australia</option>
                                            <option value="15">Austria</option>
                                            <option value="16">Azerbaijan</option>
                                            <option value="17">Bahrain</option>
                                            <option value="20">Belarus</option>
                                            <option value="19">Barbados</option>
                                            <option value="22">Belize</option>
                                            <option value="21">Belgium</option>
                                            <option value="23">Benin</option>
                                            <option value="27">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="29">Botswana</option>
                                            <option value="28">Bosnia and Herzegovina</option>
                                            <option value="30">Bouvet Island</option>
                                            <option value="32">British Indian Ocean Territory</option>
                                            <option value="31">Brazil</option>
                                            <option value="41">Cayman Islands</option>
                                            <option value="33">Brunei</option>
                                            <option value="34">Bulgaria</option>
                                            <option value="35">Burkina Faso</option>
                                            <option value="36">Burundi</option>
                                            <option value="37">Cambodia</option>
                                            <option value="38">Cameroon</option>
                                            <option value="39">Canada</option>
                                            <option value="40">Cape Verde</option>
                                            <option value="46">Christmas Island</option>
                                            <option value="4">Algeria</option>
                                            <option value="42">Central African Republic</option>
                                            <option value="43">Chad</option>
                                            <option value="44">Chile</option>
                                            <option value="45">China</option>
                                            <option value="47">Cocos (Keeling) Islands</option>
                                            <option value="50">Congo</option>
                                            <option value="48">Colombia</option>
                                            <option value="49">Comoros</option>
                                            <option value="51">Cook Islands</option>
                                            <option value="5">American Samoa</option>
                                            <option value="52">Costa Rica</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Aland Islands</option>
                                            <option value="3">Albania</option>
                                            <option value="13">Aruba</option>
                                            <option value="6">Andorra</option>
                                            <option value="7">Angola</option>
                                            <option value="63">Dominican Republic</option>
                                            <option value="61">Djibouti</option>
                                            <option value="62">Dominica</option>
                                            <option value="69">Eritrea</option>
                                            <option value="64">East Timor</option>
                                            <option value="65">Ecuador</option>
                                            <option value="66">Egypt</option>
                                            <option value="67">El Salvador</option>
                                            <option value="68">Equatorial Guinea</option>
                                            <option value="70">Estonia</option>
                                            <option value="73">Faroe Islands</option>
                                            <option value="71">Ethiopia</option>
                                            <option value="72">Falkland Islands</option>
                                            <option value="74">Fiji Islands</option>
                                            <option value="77">French Guiana</option>
                                            <option value="75">Finland</option>
                                            <option value="76">France</option>
                                            <option value="79">French Southern Territories</option>
                                            <option value="78">French Polynesia</option>
                                            <option value="80">Gabon</option>
                                            <option value="89">Guadeloupe</option>
                                            <option value="81">Gambia The</option>
                                            <option value="82">Georgia</option>
                                            <option value="83">Germany</option>
                                            <option value="84">Ghana</option>
                                            <option value="85">Gibraltar</option>
                                            <option value="86">Greece</option>
                                            <option value="87">Greenland</option>
                                            <option value="88">Grenada</option>
                                            <option value="91">Guatemala</option>
                                            <option value="90">Guam</option>
                                            <option value="92">Guernsey and Alderney</option>
                                            <option value="99">Hong Kong S.A.R.</option>
                                            <option value="93">Guinea</option>
                                            <option value="94">Guinea-Bissau</option>
                                            <option value="95">Guyana</option>
                                            <option value="96">Haiti</option>
                                            <option value="97">Heard Island and McDonald Islands</option>
                                            <option value="98">Honduras</option>
                                            <option value="100">Hungary</option>
                                            <option value="53">Cote D&#39;Ivoire (Ivory Coast)</option>
                                            <option value="101">Iceland</option>
                                            <option value="102">India</option>
                                            <option value="103">Indonesia</option>
                                            <option value="104">Iran</option>
                                            <option value="55">Cuba</option>
                                            <option value="57">Cyprus</option>
                                            <option value="54">Croatia</option>
                                            <option value="59">Democratic Republic of the Congo</option>
                                            <option value="56">Curaçao</option>
                                            <option value="58">Czech Republic</option>
                                            <option value="60">Denmark</option>
                                            <option value="112">Jordan</option>
                                            <option value="113">Kazakhstan</option>
                                            <option value="114">Kenya</option>
                                            <option value="118">Kyrgyzstan</option>
                                            <option value="116">Kosovo</option>
                                            <option value="117">Kuwait</option>
                                            <option value="125">Liechtenstein</option>
                                            <option value="119">Laos</option>
                                            <option value="120">Latvia</option>
                                            <option value="121">Lebanon</option>
                                            <option value="122">Lesotho</option>
                                            <option value="123">Liberia</option>
                                            <option value="124">Libya</option>
                                            <option value="126">Lithuania</option>
                                            <option value="127">Luxembourg</option>
                                            <option value="128">Macau S.A.R.</option>
                                            <option value="133">Maldives</option>
                                            <option value="129">Macedonia</option>
                                            <option value="130">Madagascar</option>
                                            <option value="131">Malawi</option>
                                            <option value="132">Malaysia</option>
                                            <option value="136">Man (Isle of)</option>
                                            <option value="134">Mali</option>
                                            <option value="135">Malta</option>
                                            <option value="137">Marshall Islands</option>
                                            <option value="148">Montserrat</option>
                                            <option value="138">Martinique</option>
                                            <option value="139">Mauritania</option>
                                            <option value="140">Mauritius</option>
                                            <option value="141">Mayotte</option>
                                            <option value="142">Mexico</option>
                                            <option value="143">Micronesia</option>
                                            <option value="144">Moldova</option>
                                            <option value="145">Monaco</option>
                                            <option value="146">Mongolia</option>
                                            <option value="147">Montenegro</option>
                                            <option value="151">Myanmar</option>
                                            <option value="149">Morocco</option>
                                            <option value="150">Mozambique</option>
                                            <option value="152">Namibia</option>
                                            <option value="109">Jamaica</option>
                                            <option value="153">Nauru</option>
                                            <option value="154">Nepal</option>
                                            <option value="155">Netherlands</option>
                                            <option value="156">New Caledonia</option>
                                            <option value="105">Iraq</option>
                                            <option value="107">Israel</option>
                                            <option value="106">Ireland</option>
                                            <option value="115">Kiribati</option>
                                            <option value="108">Italy</option>
                                            <option value="110">Japan</option>
                                            <option value="111">Jersey</option>
                                            <option value="163">North Korea</option>
                                            <option value="164">Northern Mariana Islands</option>
                                            <option value="165">Norway</option>
                                            <option value="166">Oman</option>
                                            <option value="167">Pakistan</option>
                                            <option value="168">Palau</option>
                                            <option value="172">Paraguay</option>
                                            <option value="170">Panama</option>
                                            <option value="171">Papua new Guinea</option>
                                            <option value="175">Pitcairn Island</option>
                                            <option value="173">Peru</option>
                                            <option value="174">Philippines</option>
                                            <option value="178">Puerto Rico</option>
                                            <option value="176">Poland</option>
                                            <option value="177">Portugal</option>
                                            <option value="184">Saint Helena</option>
                                            <option value="179">Qatar</option>
                                            <option value="180">Reunion</option>
                                            <option value="181">Romania</option>
                                            <option value="182">Russia</option>
                                            <option value="183">Rwanda</option>
                                            <option value="187">Saint Pierre and Miquelon</option>
                                            <option value="185">Saint Kitts And Nevis</option>
                                            <option value="186">Saint Lucia</option>
                                            <option value="188">Saint Vincent And The Grenadines</option>
                                            <option value="189">Saint-Barthelemy</option>
                                            <option value="190">Saint-Martin (French part)</option>
                                            <option value="193">Sao Tome and Principe</option>
                                            <option value="191">Samoa</option>
                                            <option value="192">San Marino</option>
                                            <option value="197">Seychelles</option>
                                            <option value="194">Saudi Arabia</option>
                                            <option value="195">Senegal</option>
                                            <option value="196">Serbia</option>
                                            <option value="200">Sint Maarten (Dutch part)</option>
                                            <option value="198">Sierra Leone</option>
                                            <option value="199">Singapore</option>
                                            <option value="206">South Georgia</option>
                                            <option value="201">Slovakia</option>
                                            <option value="202">Slovenia</option>
                                            <option value="203">Solomon Islands</option>
                                            <option value="204">Somalia</option>
                                            <option value="205">South Africa</option>
                                            <option value="157">New Zealand</option>
                                            <option value="207">South Korea</option>
                                            <option value="208">South Sudan</option>
                                            <option value="158">Nicaragua</option>
                                            <option value="162">Norfolk Island</option>
                                            <option value="160">Nigeria</option>
                                            <option value="159">Niger</option>
                                            <option value="161">Niue</option>
                                            <option value="169">Palestinian Territory Occupied</option>
                                            <option value="220">Tanzania</option>
                                            <option value="226">Trinidad And Tobago</option>
                                            <option value="209">Spain</option>
                                            <option value="210">Sri Lanka</option>
                                            <option value="212">Suriname</option>
                                            <option value="224">Tokelau</option>
                                            <option value="215">Sweden</option>
                                            <option value="211">Sudan</option>
                                            <option value="218">Taiwan</option>
                                            <option value="225">Tonga</option>
                                            <option value="216">Switzerland</option>
                                            <option value="217">Syria</option>
                                            <option value="230">Turks And Caicos Islands</option>
                                            <option value="236">United States</option>
                                            <option value="237">United States Minor Outlying Islands</option>
                                            <option value="238">Uruguay</option>
                                            <option value="228">Turkey</option>
                                            <option value="244">Virgin Islands (British)</option>
                                            <option value="241">Vatican City State (Holy See)</option>
                                            <option value="231">Tuvalu</option>
                                            <option value="219">Tajikistan</option>
                                            <option value="221">Thailand</option>
                                            <option value="227">Tunisia</option>
                                            <option value="233">Ukraine</option>
                                            <option value="232">Uganda</option>
                                            <option value="234">United Arab Emirates</option>
                                            <option value="235">United Kingdom</option>
                                            <option value="223">Togo</option>
                                            <option value="229">Turkmenistan</option>
                                            <option value="245">Virgin Islands (US)</option>
                                            <option value="246">Wallis And Futuna Islands</option>
                                            <option value="213">Svalbard And Jan Mayen Islands</option>
                                            <option value="239">Uzbekistan</option>
                                            <option value="240">Vanuatu</option>
                                            <option value="214">Swaziland</option>
                                            <option value="242">Venezuela</option>
                                            <option value="243">Vietnam</option>
                                            <option value="222">The Bahamas</option>
                                            <option value="247">Western Sahara</option>
                                            <option value="248">Yemen</option>
                                            <option value="249">Zambia</option>
                                            <option value="250">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>
                                            State
                                        </label>
                                        <select data-placeholder="State" label="false"
                                                class="select required js-example-placeholder-single select-states form-control"
                                                required="required" aria-required="true" name="client[state]"
                                                id="client_state">
                                            <option value="" label=" "></option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>
                                            Address
                                        </label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[address]"
                                               id="client_address"/>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <div class='mb-3'>
                                        <label class='form-label fs-14 text-dark'>
                                            Map Source
                                        </label>
                                        <input label="false" class="string required form-control" required="required"
                                               aria-required="true" type="text" name="client[map_source]"
                                               id="client_map_source"/>
                                    </div>
                                </div>
                                <div class='col-xl-12 mb-3'>
                                    <div class='fw-bold mb-2'>
                                        <i class='ti ti-photo'></i>
                                        Image
                                    </div>
                                    <input class="filepond"
                                           data-label="&lt;p class=&#39;me-2&#39;&gt; Drag &amp; Drop Files or &lt;u&gt;Browse&lt;/u&gt;"
                                           type="file" name="client[image]" id="client_image"/>
                                </div>

                                <div class='card-footer'>
                                    <div class='float-end'>
                                        <a class='btn btn-light m-1' href='/merchanthq/clients'>
                                            Cancel
                                        </a>
                                        <button class='btn btn-primary m-1' type='submit'>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
