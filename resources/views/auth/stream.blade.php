<div class="row">
    <div class="col-xs-12  col-md-8 col-md-offset-2">
        <h3>Create Channel</h3>
        <form class="form-horizontal variant-form" method="post" action="{{url('/stream/home')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="title" id="channelName" placeholder="Example: My new stream" maxlength="20" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="domain" id="protectDomain" placeholder="Example: domain.com,www.example.tv">
                </div>
            </div>
            <div class="more">
                <input type="submit" value="Create Chanel" style="background-color: rgba(216, 216, 216, 0.79)">
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h3><span>Contact </span><span>&nbsp; | &nbsp;</span><span> Channels</span></h3>
                </div>

        </div>
    </div>
</div>
    </div>