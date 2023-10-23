<section class="section-tab width100">
    <section data-particle_enable="false" data-particle-mobile-disabled="false"
             class="elementor-section elementor-inner-section elementor-element elementor-element-5a200ce elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
             data-id="5a200ce" data-element_type="section"
             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-custom">
            <div
                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0385184 exad-glass-effect-no exad-sticky-section-no"
                data-id="0385184" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-63f1253 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-progress"
                        data-id="63f1253" data-element_type="widget"
                        data-widget_type="progress.default">
                        <div class="elementor-widget-container">
                            <span class="elementor-title">English</span>
                            <div class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100" aria-valuenow="50"
                                 aria-valuetext="50% (Elementary)">
                                <div class="elementor-progress-bar" data-max="50">
                                    <span class="elementor-progress-text">Elementary</span>
                                    <span class="elementor-progress-percentage">50%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46e1689 exad-glass-effect-no exad-sticky-section-no"
                data-id="46e1689" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-856cf9a elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                        data-id="856cf9a" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon elementor-animation-bounce-in">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-particle_enable="false" data-particle-mobile-disabled="false"
             class="elementor-section elementor-inner-section elementor-element elementor-element-1fa1ff15 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
             data-id="1fa1ff15" data-element_type="section"
             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-custom">
            <div
                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3cc174a8 exad-glass-effect-no exad-sticky-section-no"
                data-id="3cc174a8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-73602920 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="73602920" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">Tell us about
                                your work history</h4></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-7112944c exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="7112944c" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h6 class="elementor-heading-title elementor-size-default">Start with your
                                most recent job and work backwards.</h6></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-6fea1c58 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                        data-id="6fea1c58" data-element_type="widget"
                        data-widget_type="wpforms.default">
                        <div class="elementor-widget-container">
                            <div class="wpforms-container wpforms-container-full" id="wpforms-626">
                                <form id="languages_form" class="wpforms-validate wpforms-form"
                                      data-formid="626" method="post" enctype="multipart/form-data"
                                      action="/"
                                      data-token="bd03f5379139322e31b053c6ab97fff9">
                                    @csrf
                                    <noscript
                                        class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                    <div class="wpforms-field-container">
                                        <div id="languages_section">
                                            @if(!empty($addedItem) && count($addedItem->model->customer_cv_language))
                                                @php $i=1; @endphp
                                                @foreach($addedItem->model->customer_cv_language as $language)
                                                    <div class="wpforms-field-container">
                                                        <div id="wpforms-626-field_1-container"
                                                             class="wpforms-field wpforms-field-checkbox"
                                                             data-field-id="1">
                                                            <label class="wpforms-field-label"
                                                                   for="wpforms-626-field_1">{{__('Select between infographic or text format')}}</label>
                                                            <ul id="wpforms-626-field_1">
                                                                <li class="choice-1 depth-1">
                                                                    <input type="checkbox" id="wpforms-626-field_1_1"
                                                                           name="wpforms[fields][1][]"
                                                                           value="DISPLAY OPTIONS FOR YOUR LANGUAGE SKILLS"><label
                                                                        class="wpforms-field-label-inline"
                                                                        for="wpforms-626-field_1_1">{{__('DISPLAY OPTIONS FOR YOUR LANGUAGE SKILLS')}}</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div id="wpforms-626-field_2-container"
                                                             class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
                                                             data-field-id="2">
                                                            <label class="wpforms-field-label"
                                                                   for="wpforms-626-field_2">{{__('LANGUAGES')}}</label><select
                                                                id="wpforms-626-field_2" class="wpforms-field-large"
                                                                name="language_{{$i}}['language_id']">
                                                                <option value="1" selected>English</option>
                                                                <option value="2">Arabic</option>
                                                                <option value="3">Frensh</option>
                                                            </select>
                                                        </div>
                                                        <div id="wpforms-626-field_3-container"
                                                             class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
                                                             data-field-id="3">
                                                            <label class="wpforms-field-label"
                                                                   for="wpforms-626-field_3">{{__('LEVEL')}}</label><select
                                                                id="wpforms-626-field_3" class="wpforms-field-large"
                                                                name="language_{{$i}}['level_{{$lang}}']">
                                                                <option value="1" selected>First Choice</option>
                                                                <option value="2">Second Choice</option>
                                                                <option value="3">Third Choice</option>
                                                            </select>
                                                        </div>
                                                        <div id="wpforms-626-field_4-container"
                                                             class="wpforms-field wpforms-field-text" data-field-id="4">
                                                            <label class="wpforms-field-label"
                                                                   for="wpforms-626-field_4">{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}</label>
                                                            <input type="text" id="wpforms-626-field_4"
                                                                   class="wpforms-field-large"
                                                                   name="language_{{$i}}['information_{{$lang}}']"
                                                                   placeholder="{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}" value="{{$language->{"information_".$lang } }}">
                                                        </div>
                                                    </div>
                                                    @php $i++; @endphp
                                                @endforeach
                                            @else
                                                <div class="wpforms-field-container">
                                                    <div id="wpforms-626-field_1-container"
                                                         class="wpforms-field wpforms-field-checkbox"
                                                         data-field-id="1">
                                                        <label class="wpforms-field-label"
                                                               for="wpforms-626-field_1">{{__('Select between infographic or text format')}}</label>
                                                        <ul id="wpforms-626-field_1">
                                                            <li class="choice-1 depth-1">
                                                                <input type="checkbox" id="wpforms-626-field_1_1"
                                                                       name="wpforms[fields][1][]"
                                                                       value="DISPLAY OPTIONS FOR YOUR LANGUAGE SKILLS"><label
                                                                    class="wpforms-field-label-inline"
                                                                    for="wpforms-626-field_1_1">{{__('DISPLAY OPTIONS FOR YOUR LANGUAGE SKILLS')}}</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div id="wpforms-626-field_2-container"
                                                         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
                                                         data-field-id="2">
                                                        <label class="wpforms-field-label"
                                                               for="wpforms-626-field_2">LANGUAGES</label><select
                                                            id="wpforms-626-field_2" class="wpforms-field-large"
                                                            name="language_1['language_id']">
                                                            <option value="1">English</option>
                                                            <option value="2">Arabic</option>
                                                            <option value="3">Frensh</option>
                                                        </select>
                                                    </div>
                                                    <div id="wpforms-626-field_3-container"
                                                         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
                                                         data-field-id="3">
                                                        <label class="wpforms-field-label"
                                                               for="wpforms-626-field_3">LEVEL</label><select
                                                            id="wpforms-626-field_3" class="wpforms-field-large"
                                                            name="language_1['level_{{$lang}}']">
                                                            <option value="1">First Choice</option>
                                                            <option value="2">Second Choice</option>
                                                            <option value="3">Third Choice</option>
                                                        </select>
                                                    </div>
                                                    <div id="wpforms-626-field_4-container"
                                                         class="wpforms-field wpforms-field-text" data-field-id="4">
                                                        <label class="wpforms-field-label"
                                                               for="wpforms-626-field_4">{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}</label>
                                                        <input type="text" id="wpforms-626-field_4"
                                                               class="wpforms-field-large"
                                                               name="language_1['information_{{$lang}}']"
                                                               placeholder="{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}">
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div id="wpforms-626-field_5-container"
                                             class="wpforms-field wpforms-field-html wpforms-two-thirds wpforms-first"
                                             data-field-id="5">
                                            <div id="wpforms-626-field_5">
                                                <hr>
                                            </div>
                                        </div>
                                        <div id="wpforms-626-field_6-container"
                                             class="wpforms-field wpforms-field-html wpforms-one-third"
                                             data-field-id="6">
                                            <div id="wpforms-626-field_6">
                                                <button type="button" style="display: inline-block;
    vertical-align: middle;
    background: #024851;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 5px;

    border-radius: 5px;" onclick="AddLanguage()">+
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
    </section>
</section>
