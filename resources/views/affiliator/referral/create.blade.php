@extends('layouts.affiliator.app')

@section('meta_tags')
    {{--  External META's  --}}

@endsection

@section('page_title', __('Referrals'))

@section('css_links')
    {{--  External CSS  --}}
@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
    /* Custom CSS Here */
    .card-body .media i {
        font-style: normal;
    }
    #inputURL {
        width: 95%;
        border: 1px solid #dddddd;
    }
    .toast {
        position: fixed;
        top: 30px;
        right: 30px;
        z-index: 9999;
    }
    .toast-header {
        background-color: rgb(192, 233, 192) !important;
    }
    .toast-header .btn-close {
        position: absolute;
        right: 5px;
        background-color: transparent;
        border-radius: 50%;
        border: 0px solid;
        color: red;
        font-weight: bold;
    }
    </style>
@endsection


@section('page_name')
    <b class="text-uppercase">{{ __('Referrals') }}</b>
@endsection


@section('breadcrumb')
    <li class="breadcrumb-item text-uppercase">{{ __('Referrals') }}</li>
    <li class="breadcrumb-item text-uppercase active">{{ __('Create Referral') }}</li>
@endsection



@section('content')

<!-- Start row -->
<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <i class="sl-icon-paper-clip mr-3 mt-1 font-40 text-info-gradient"></i>
                    <div class="media-body">
                        <div class="form-group">
                            <input type="url" class="form-control link-input" id="inputURL" placeholder="Paste Your Link Here" required>
                            <small>Paste any link from <a href="{{ url('/') }}" target="_blank" class="text-info text-bold"><b>https://financialmarkets.club</b></a></small>
                        </div>
                        <h6 class="mb-2">
                            <b>Updated Link:</b> 
                            <q class="text-info" id="updatedLink"></q>
                        </h6>
                    </div>
                    <button type="button" class="btn btn-info btn-lg float-end" id="createCopy"><b>Create & Copy</b></button>
                </div>
            </div>
        </div>            
    </div>
</div>
<!-- End row -->

@endsection


@section('script_links')
    {{--  External Javascript Links --}}
@endsection

@section('custom_script')
    {{--  External Custom Javascript  --}}
    <script>
        $(document).ready(function() {
    // When the user clicks the "Create & Copy" button
    $("#createCopy").click(function() {
        var inputURL = $("#inputURL").val(); // Get the input URL

        // Check if the input is a valid URL
        var urlPattern = /^(ftp|http|https):\/\/[^ "]+$/;
        if (urlPattern.test(inputURL)) {
            // Check if the URL already has a "?ref=" postfix
            var refIndex = inputURL.indexOf("?ref=");
            if (refIndex !== -1) {
                // Replace the existing "?ref=" postfix with the user's affiliate ID
                var updatedURL = inputURL.substring(0, refIndex) + "?ref={{ auth()->user()->affiliator->id }}";
            } else {
                // Add a new "?ref=" postfix to the end of the URL with the user's affiliate ID
                updatedURL = inputURL + "?ref={{ auth()->user()->affiliator->id }}";
            }

            // Update the #updatedLink element with the updated URL
            $("#updatedLink").text(updatedURL);

            // Update the input field with the updated URL
            $("#inputURL").val(updatedURL);

            // Copy the updated URL to the clipboard
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(updatedURL).select();
            document.execCommand("copy");
            $temp.remove();

            // Show a success message in a Bootstrap toast
            var toastHTML = '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">' +
                                '<div class="toast-header">' +
                                    '<strong class="me-auto">URL Copied</strong>' +
                                '</div>' +
                                '<div class="toast-body">The updated URL has been copied to your clipboard.</div>' +
                            '</div>';
            $("body").append(toastHTML);
            var $toast = $('.toast');
            $toast.toast('show');

            // Remove the toast from the DOM after it's hidden
            $toast.on('hidden.bs.toast', function() {
                $toast.remove();
            });
        } else {
            alert('Please input an URL.');
        }
    });
});

    </script>
@endsection
