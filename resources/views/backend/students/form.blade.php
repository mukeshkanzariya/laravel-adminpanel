<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('first_name', trans('labels.backend.students.first_name'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
            {{ Form::text('first_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.blogs.title'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    
    <div class="form-group">
        {{ Form::label('last_name', trans('labels.backend.students.last_name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('last_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.blogs.title'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
         {{ Form::label('gender', trans('labels.backend.students.gender'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::radio('gender', 'male', true) }} Male
            {{ Form::radio('gender', 'female') }} Female
        </div><!--col-lg-10-->
    </div>

    <div class="form-group">
         {{ Form::label('Hobbies', trans('labels.backend.students.hobbies'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
          {{  Form::textarea('hobbies',null,['class'=>'col-lg-2 control-label required form-control', 'placeholder' => 'Hobbies', 'rows' => 2, 'cols' => 40]) }}
        </div><!--col-lg-10-->
    </div>

     <div class="form-group">
         {{ Form::label('profile_picture', 'Profile Picture', ['class' => 'col-lg-2 control-label required']) }} 
        <div class="col-lg-10">
            @if(!empty($students->profile_picture))
                <img src="<?php echo Storage::url('img/student/'.$students->profile_picture); ?>" height="100" width="100" alt="Profile Picture">
            @endif
            
          {{  Form::file('profile_picture') }}
        </div><!--col-lg-10-->
    </div>
    
    <div class="form-group">
         {{ Form::label('standard', trans('labels.backend.students.standard'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
          {{ Form::select('standard',$standard, null) }}
        </div><!--col-lg-10-->
    </div>


</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
