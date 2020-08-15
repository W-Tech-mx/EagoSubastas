				
			<div class="col-xs-6"> 	

				<div class="form-group">
                    {!! Form::label('category', getPhrase('Lote'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('category', old('category'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Lote',

                    'ng-model' => 'category', 

                    'required' => 'true',

					'ng-minlength' => '2',

					'ng-maxlength' => '50',

					'ng-class'=>'{"has-error": formValidate.category.$touched && formValidate.category.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.category.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('minlength')!!}

	    					{!! getValidationMessage('maxlength')!!}


					</div>

                </div>




                <div class="form-group">
                    {!! Form::label('description', getPhrase('Descripcion'), ['class' => 'control-label']) !!}

                   
                    {{ Form::textarea('description', old('description'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Descripcion',

                    'ng-model' => 'description', 

					'ng-maxlength' => '200',

                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.description.$error" >

	    				{!! getValidationMessage('maxlength')!!}

					</div>

                </div>


                 
                <div class="form-group">

                    {!! Form::label('status', getPhrase('Estado'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php
                        $val=old('status');
                        if ($record)
                         $val = $record->status;

                        $selected = null;
                        if($record)
                        $selected = $record->status;      
                    ?>

                    

                    {{Form::select('status', activeinactive(), $selected, ['placeholder' => getPhrase('Seleccionar'),'class'=>'form-control select2',

                            'ng-model'=>'status',

                            'required'=> 'true',

                            'ng-init'=>'status="'.$val.'"', 

                            'ng-class'=>'{"has-error": formValidate.status.$touched && formValidate.status.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.status.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>




               <div class="form-group pull-right">

{{--					<button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>--}}
                    <button class="btn btn-success" ng-disabled='!formValidate.$valid'>Guardar</button>
				</div>

			</div>



                