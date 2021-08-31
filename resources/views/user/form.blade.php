<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="first-name" required="required" class="form-control @error('name')is-invalid @enderror" value="{{ isset($user) ? $user->name : '' }}" name="name">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="email" id="last-name" name="email" required="required" class="form-control @error('email') is-invalid @enderror" value="{{ isset($user) ? $user->email : '' }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="item form-group">
    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Paket</label>
    <div class="col-md-6 col-sm-6 ">
        <select name="paket" id="heard" class="form-control @error('paket') is-invalid @enderror">
            <option value="">Choose..</option>
            <option value="1" {{ $user->paket->id == 1 ? 'selected' : '' }}>Free</option>
            <option value="2" {{ $user->paket->id == 2 ? 'selected' : '' }}>Entry</option>
            <option value="3" {{ $user->paket->id == 3 ? 'selected' : '' }}>Pro</option>
        </select>
        @error('paket')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="item form-group">
    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Template</label>
    <div class="col-md-6 col-sm-6 ">
        <select name="template_id" id="heard" class="form-control @error('template_id') is-invalid @enderror">
            <option value="">Choose..</option>
            <option value="1" {{ $user->template['id'] == 1 ? 'selected' : '' }}>Calm</option>
            <option value="2" {{ $user->template['id'] == 2 ? 'selected' : '' }}>Autumn</option>
        </select>
        @error('template_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="item form-group">
    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
    <div class="col-md-6 col-sm-6 ">
        <select name="status" id="heard" class="form-control @error('status') is-invalid @enderror">
            <option value="">Choose..</option>
            <option value="1" {{ $user->is_new != 0 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $user->is_new == 0 ? 'selected' : '' }}>Not Active</option>
        </select>
        @error('status')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
{{--        <input id="middle-name" class="form-control" type="text" name="middle-name" value="@if(isset($user)) {{ $user->is_new == 0 ? 'active' : 'not active'}} @endif">--}}
    </div>
</div>


{{--<div class="item form-group">--}}
{{--    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>--}}
{{--    </label>--}}
{{--    <div class="col-md-6 col-sm-6 ">--}}
{{--        <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">--}}
{{--        <script>--}}
{{--            function timeFunctionLong(input) {--}}
{{--                setTimeout(function() {--}}
{{--                    input.type = 'text';--}}
{{--                }, 60000);--}}
{{--            }--}}
{{--        </script>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="ln_solid"></div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
        <button class="btn btn-primary" type="button">Cancel</button>
        <button class="btn btn-primary" type="reset">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>

</div>
