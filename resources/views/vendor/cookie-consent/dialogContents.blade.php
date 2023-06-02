<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6 fixed-bottom section-bg p-2 text-light text-center">
        <div class="p-2 rounded-lg">
           
            <div class="flex items-center justify-between flex-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="w-0 flex-1 items-center hidden md:inline">
                            <p class="ml-3 text-black fw-light fs-6 cookie-consent__message">
                                {!! trans('cookie-consent::texts.message') !!}
                            </p>
                        </div>   
                        <a href="#" class="close js-cookie-consent-agree cookie-consent__disagree">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-12">
                        <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                            <a href="{{route('cookies')}}">
                                <button class="btn-masthead js-cookie-consent-agree cookie-consent__agree flex items-center justify-center px-4 py-2 rounded-md text-sm text-black fw-light fs-6 me-3">
                                    Leggi di più
                                </button>
                            </a>
                            <button class="btn-masthead js-cookie-consent-agree cookie-consent__agree flex items-center justify-center px-4 py-2 rounded-md text-sm text-black fw-light fs-6 me-3">
                                {{ trans('cookie-consent::texts.agree') }}
                            </button>
                        </div>
                    </div>
                   
                 </div>
                
            </div>
        </div>
    </div>
</div>
