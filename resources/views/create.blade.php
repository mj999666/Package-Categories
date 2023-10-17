@extends("Categories::app")
@section("main")
    <form method="post" action="{{ route("dashboard.category.store") }}">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="slug_title_url">
                        {{ trans('Categories::message.slug_title_url') }}
                    </label>
                    <input
                            placeholder="{{ trans('Categories::message.slug_title_url') }}"
                            value="{{ old("slug_title_url") }}"
                            name="slug_title_url"
                            id="slug_title_url"
                            aria-describedby="error-validation-slug_title_url"
                            class="form-control
                            @if(isset($errors))
                                {{ $errors->has('slug_title_url') ? "is-invalid" : "" }}
                            @endif
                            "
                            type="text"
                    >
                    <div id="error-validation-slug_title_url" class="invalid-feedback">
                        @if(isset($errors))
                            {{ $errors->first('slug_title_url') }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="page_title">
                        {{ trans('Categories::message.page_title') }}
                    </label>
                    <input
                            placeholder="{{ trans('Categories::message.page_title') }}"
                            value="{{ old("page_title") }}"
                            name="page_title"
                            id="page_title"
                            aria-describedby="error-validation-page_title"
                            class="form-control
                            @if(isset($errors))
                                {{ $errors->has('page_title') ? "is-invalid" : "" }}
                            @endif"
                            type="text"
                    >
                    <div id="error-validation-page_title" class="invalid-feedback">
                        @if(isset($errors))
                            {{ $errors->first('page_title') }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="h1_title">
                        {{ trans('Categories::message.h1_title') }}
                    </label>
                    <input
                            placeholder="{{ trans('Categories::message.h1_title') }}"
                            value="{{ old("h1_title") }}"
                            name="h1_title"
                            id="h1_title"
                            aria-describedby="error-validation-h1_title"
                            class="form-control
                            @if(isset($errors))
                                {{ $errors->has('h1_title') ? "is-invalid" : "" }}
                            @endif"
                            type="text"
                    >
                    <div id="error-validation-h1_title" class="invalid-feedback">
                        @if(isset($errors))
                            {{ $errors->first('h1_title') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end border-top pt-3">
            <div class="col-auto">
                <button class="btn btn-pill btn-primary">{{ trans('Categories::message.store') }}</button>
            </div>
        </div>
    </form>
@endsection