                <div class="tab-pane fade show active" id="generalSetting" role="tabpanel" aria-labelledby="general-setting">
                    <div class="card">
                        <h4 class="card-header p-3"><b>@lang('file.General Setting')</b></h4>
                        <hr>
                        <div class="card-body">
                            <form action="{{ route('developer-section.submit') }}" method="POST">
                                @csrf

                                <h5><b>@lang('General')</b></h5>
                                <hr>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Product Mode')</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly name="product_mode" class="form-control" value="{{env('PRODUCT_MODE')}}">
                                        <small class="text-danger">You have to change it from .env</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Version') <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="version" class="form-control" value="{{env('VERSION')}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Bug No') <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="bug_no" class="form-control" value="{{env('BUG_NO')}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Minimum Required Version') <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="minimum_required_version" class="form-control" value="{{$general->minimum_required_version}}">
                                    </div>
                                </div>

                                <!----------------------------------- Version Upgrade ------------------------------------------>
                                <hr>
                                <h5><b>@lang('file.Version Upgrade')</b></h5>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Latest Version Upgrade')</label>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="checkbox" {{$control->version_upgrade->latest_version_upgrade_enable ? 'checked':''}} class="form-check-input" name="latest_version_upgrade_enable">
                                            <label class="form-check-label" for="exampleCheck1">Enable</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Latest Version DB Migrate')</label>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="checkbox" {{$control->version_upgrade->latest_version_db_migrate_enable ? 'checked':''}} class="form-check-input" name="latest_version_db_migrate_enable">
                                            <label class="form-check-label" for="exampleCheck1">Enable</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Version Upgrade URL') <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="version_upgrade_base_url" class="form-control" value="{{$control->version_upgrade->version_upgrade_base_url}}" placeholder="Ex: https://cartproshop.com/version_upgrade_files/">
                                    </div>
                                </div>

                                <!----------------------------------- Bug Update ------------------------------------------>

                                <hr>
                                <h5><b>@lang('file.Bug Update')</b></h5>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Bug Update')</label>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="checkbox" {{$control->bug_update->bug_update_enable ? 'checked':''}} class="form-check-input" name="bug_update_enable">
                                            <label class="form-check-label" for="exampleCheck1">Enable</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Bug DB Migrate')</label>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" {{$control->bug_update->bug_db_migrate_enable ? 'checked':''}} name="bug_db_migrate_enable">
                                            <label class="form-check-label" for="exampleCheck1">Enable</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">@lang('file.Bug Update URL') <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="bug_update_base_url" class="form-control" value="{{$control->bug_update->bug_update_base_url}}" placeholder="Ex: https://cartproshop.com/bug_update_files/">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">@lang('file.Submit')</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
