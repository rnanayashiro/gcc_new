@extends('layouts.app')
@section('styles')
    @parent
    @vite([
        'resources/css/pagesetting.css',
        'resources/css/common.css',
    ])
@endsection
@include('includes.header')
@section('content')
    <main id="main" class="contents">
        <div class="main-cover">
            <div class="main-contents">
                <div class="article-header">
                    <p class="article-category">{{ __('message.careers_category') }}</p>
                    <h1 class="main-title">{{ __('message.recruit') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac06.jpg" alt=""></div>
                <div class="">
                    <div class="">
                        {{ __('message.recruitment_heading') }}
                    </div>
                    <div class="">
                        {!! nl2br(__('message.recruitment_content')) !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.job_openings') }}
                    </div>
                    <div class="support-cases">
                        <ul>
                            <li>{{ __('message.job_tax_staff') }}</li>
                            <li>{{ __('message.job_account_consulting_staff') }}</li>
                            <li>{{ __('message.job_overseas_consulting_staff') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.tax_staff') }}
                    </div>
                    <div class="text-block-flex op-table">
                        <table>
                            <tr>
                                <th>{{ __('message.job_title') }}</th>
                                <td>{{ __('message.tax_staff') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.recruitment_background') }}</th>
                                <td>{{ __('message.tax_staff_background') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.job_description') }}</th>
                                <td>{!! nl2br(e(__('message.tax_staff_job_description'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.working_environment') }}</th>
                                <td>{!! nl2br(e(__('message.tax_staff_working_environment'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.application_qualifications') }}</th>
                                <td>{!! nl2br(e(__('message.tax_staff_qualifications'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.work_location') }}</th>
                                <td>{{ __('message.tax_staff_location') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.transportation') }}</th>
                                <td>{{ __('message.tax_staff_transportation') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.work_hours') }}</th>
                                <td>{!! nl2br(e(__('message.tax_staff_work_hours'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.salary') }}</th>
                                <td>{!! nl2br(e(__('message.tax_staff_salary'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.bonus') }}</th>
                                <td>{{ __('message.tax_staff_bonus') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.holidays') }}</th>
                                <td>{{ __('message.tax_staff_holidays') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.benefits') }}</th>
                                <td>{!! nl2br(e(__('message.tax_staff_benefits'))) !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.accounting_consulting_staff') }}
                    </div>
                    <div class="text-block-flex op-table">
                        <table>
                            <tr>
                                <th>{{ __('message.job_title') }}</th>
                                <td>{{ __('message.accounting_consulting_staff') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.job_description') }}</th>
                                <td>{!! nl2br(e(__('message.accounting_consulting_job_description'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.working_environment') }}</th>
                                <td>{!! nl2br(e(__('message.accounting_consulting_working_environment'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.application_qualifications') }}</th>
                                <td>{!! nl2br(e(__('message.accounting_consulting_qualifications'))) !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.overseas_consulting_staff') }}
                    </div>
                    <div class="text-block-flex op-table">
                        <table>
                            <tr>
                                <th>{{ __('message.job_title') }}</th>
                                <td>{{ __('message.overseas_consulting_staff') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.job_description') }}</th>
                                <td>{!! nl2br(e(__('message.overseas_consulting_job_description'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.working_environment') }}</th>
                                <td>{!! nl2br(e(__('message.overseas_consulting_working_environment'))) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.application_qualifications') }}</th>
                                <td>{!! nl2br(e(__('message.overseas_consulting_qualifications'))) !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.recruitment_process') }}
                    </div>
                    <div class="image-container-center m-top30">
                        <img src="/images/img.jpg" alt="{{ __('message.image_alt') }}">
                    </div>
                    <div class="m-top30">
                        {!! nl2br(e(__('message.recruitment_note'))) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
