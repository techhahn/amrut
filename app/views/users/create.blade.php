<section class="row">
        <article class="col-md-7 col-md-offset-2">
            {{ Form::open(array('url'=>'users/register', 'class' => 'form-horizontal', 'role' => 'form')) }}

            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Susie59')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'Susie')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Doe')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'*******')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-10">
                    {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{ Form::submit('Register', array('class'=>'btn btn-default btn-large btn-block'))}}
                </div>
            </div>
            {{ Form::close() }}

    </article>
</section>