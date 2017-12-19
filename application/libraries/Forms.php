<?php

	class Forms
	{
		var $CI	= null; 
		var $format_date = 'Y-m-d';
		var $form;
		var $defaultData = array();

		function __construct()
		{
			$this->CI =& get_instance();
			// $this->CI->load->library('MyLibrary','lib');
			$this->CI->load->library('Bootstrap');
			//echo $this->get_client_ip();	

		}
		

		function textarea($input)
		{
			// $this->lib->tanggal(date());
			// var_dump($input);
			if(!empty($input->custom_name))
				$name = $input->custom_name;
			else
				$name = $input->name;

			if($input->kategori == 'pendidikan')
				$field = $this->getName('fil'.$input->filter.$input->field,$input->kategori);
			else
				$field = $this->getName($input->field,$input->kategori);

			if($input->kategori != 'pendidikan' AND isset($this->defaultData[$input->kategori][$input->field]))
				$value = array('value'=>$this->defaultData[$input->kategori][$input->field]);
			elseif ($input->kategori == 'pendidikan' AND isset($this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]))
				$value = array('value'=>$this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]);
			else
				$value = array();

			if(empty($value))
				$value = array('value'=>$input->default);

			$htmlOptions = array('rows'=>$input->length)+$value;
			return   $this->form->textAreaRow($field, $name, array('placeholder' => $input->placeholder)+$htmlOptions); 
		}


		function input($input)
		{
			// var_dump($input);
			if($input->is_required)
				$required = array( 'required'=> 'required');
			else
				$required = array();

			if(!empty($input->custom_name))
				$name = $input->custom_name;
			else
				$name = $input->name;

			if($input->kategori == 'pendidikan')
				$field = $this->getName('fil'.$input->filter.$input->field,$input->kategori);
			else
				$field = $this->getName($input->field,$input->kategori);

			if($input->kategori != 'pendidikan' AND isset($this->defaultData[$input->kategori][$input->field]))
				$value = array('value'=>$this->defaultData[$input->kategori][$input->field]);
			elseif ($input->kategori == 'pendidikan' AND isset($this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]))
				$value = array('value'=>$this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]);
			else
				$value = array();

			if(empty($value['value'])){
				if($input->default_is_service == '1' )
				{

					// echo 'los';
	// var_dump($input);
					$key = (object) json_decode($input->default_key_field);
					foreach ($key as $k => $val_key) {
						if(isset($this->defaultData[$input->default_key_kategori][$val_key]))
							$send[$k]  = $this->defaultData[$input->default_key_kategori][$val_key];
						else
							$send[$k] = null;

					}

		 			$hasil = (array) $this->CI->libraryku->sendDataForGetData($input->default_url_service,$send);
		 			// var_dump($hasil);
		 			if($hasil && isset($hasil[$input->default_field_service]))
						$value = array('value'=>$hasil[$input->default_field_service]);
					else
						$value = array('value'=>$input->default);

				}
				else
					$value = array('value'=>$input->default);
			}
			
			if($input->is_enable == 0)
				$value = $value+array('disabled' => 'disabled');

			if($input->type == 'text'){
				$this->form->right = ($input->length <= 50)?round($input->length / 5):10;
				$f =  $this->form->textFieldRow($field, $name, array('placeholder' => (empty($input->custom_placeholder))?$input->placeholder:$input->custom_placeholder,'length'=>$input->length,'minlength'=>$input->min_length,'maxlength'=>$input->length)+$required+$value); 
			}
			elseif($input->type == 'email'){
				$this->form->right = 5;
				$f =  $this->form->emailFieldRow($field, $name, array('placeholder' => $input->placeholder)+$required+$value); 
			}
			elseif($input->type == 'number'){
				$this->form->right = ($input->length <= 50)?round($input->length / 5):10;
				$f =  $this->form->textFieldRow($field, $name, array('placeholder' => $input->placeholder, 'type'=>'number', 'minlength'=>$input->min_length,'maxlength'=>$input->length)+$required+$value); 
			}
			elseif($input->type == 'year'){
				$this->form->right = 2;
				$f =  $this->form->textFieldRow($field, $name, array('placeholder' => $input->placeholder, 'type'=>'number','min'=>$input->min_length)+$required+$value); 
			}

			$this->form->right = 10;
			return $f;

    // echo $form->passwordFieldRow('fieldname', 'Password', array('placeholder' => 'Password'));
    // echo $form->checkBoxRow('', 'fieldname', 'Remember me', 'valuefield');
    // echo $form->submitButton('Sign In');
		}

		function select($input)
		{

			if($input->is_service == 1)
			{
				$pilihan = $this->curlWs($input->service);
				$pilihan = json_decode($pilihan,TRUE);
			}
			else
				$pilihan = json_decode( $input->pilihan,TRUE);

			if(!empty($input->custom_name))
				$name = $input->custom_name;
			else
				$name = $input->name;

			if($input->kategori == 'pendidikan')
				$field = $this->getName('fil'.$input->filter.$input->field,$input->kategori);
			else
				$field = $this->getName($input->field,$input->kategori);

			if($input->kategori != 'pendidikan' AND isset($this->defaultData[$input->kategori][$input->field]))
				$value = $this->defaultData[$input->kategori][$input->field];
			elseif ($input->kategori == 'pendidikan' AND isset($this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]))
				$value = $this->defaultData[$input->kategori]['fil'.$input->filter.$input->field];
			else
				$value = '';

			if(empty($value['value'])){
				if($input->default_is_service == '1' )
				{

					// echo 'los';
	// var_dump($input);
					$key = (object) json_decode($input->default_key_field);
					foreach ($key as $k => $val_key) {
						if(isset($this->defaultData[$input->default_key_kategori][$val_key]))
							$send[$k]  = $this->defaultData[$input->default_key_kategori][$val_key];
						else
							$send[$k] = null;

					}

		 			$hasil = (array) $this->CI->libraryku->sendDataForGetData($input->default_url_service,$send);
		 			// var_dump($hasil);
		 			if($hasil && isset($hasil[$input->default_field_service]))
						$value = $hasil[$input->default_field_service];
					else
						$value = $input->default;

				}
				else
					$value = $input->default;
			}

			if($input->is_enable == 0)
				$class = array('disabled' => 'disabled');	
			else
				$class = array();		

			if(empty($value))
				$value = $input->default;

			$this->form->right = ($input->length <= 50)?round($input->length / 5):10;
			$f =  $this->form->dropDownListRow($name, $field, $value, $pilihan,array('placeholder' => $input->name)+$class); 
			return $f;

		}
		function radio($input)
		{

			// $pilihan = explode(';', $input->pilihan);
			$pilihan = json_decode($input->pilihan,TRUE);

			if(!empty($input->custom_name))
				$name = $input->custom_name;
			else
				$name = $input->name;

			if($input->kategori == 'pendidikan')
				$field = $this->getName('fil'.$input->filter.$input->field,$input->kategori);
			else
				$field = $this->getName($input->field,$input->kategori);

			if($input->kategori != 'pendidikan' AND isset($this->defaultData[$input->kategori][$input->field]))
				$value = $this->defaultData[$input->kategori][$input->field];
			elseif ($input->kategori == 'pendidikan' AND isset($this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]))
				$value = $this->defaultData[$input->kategori]['fil'.$input->filter.$input->field];
			else
				$value = '';

			if(empty($value))
				$value = $input->default;

			$f =  $this->form->radioButtonInlineListRow($name, $field, $value,$pilihan ,array('CssRadioButton'=>array('radioClass'=>'radio-custom radio-warning')
				)); 
			return $f;

		}		

		function checkbox($input)
		{


			if($input->is_service == 1)
			{
				$pilihan = $this->curlWs($input->service);
				$pilihan = json_decode($pilihan,TRUE);
			}
			else
				$pilihan = json_decode( $input->pilihan,TRUE);


			if(!empty($input->custom_name))
				$name = $input->custom_name;
			else
				$name = $input->name;

			if($input->kategori == 'pendidikan')
				$field = $this->getName('fil'.$input->filter.$input->field,$input->kategori);
			else
				$field = $this->getName($input->field,$input->kategori);

			if($input->kategori != 'pendidikan' AND isset($this->defaultData[$input->kategori][$input->field]))
			{
				$value = $this->defaultData[$input->kategori][$input->field];
				if(!is_array($value))
					$value = json_decode($value);
			}
			elseif ($input->kategori == 'pendidikan' AND isset($this->defaultData[$input->kategori]['fil'.$input->filter.$input->field])){
				$value = $this->defaultData[$input->kategori]['fil'.$input->filter.$input->field];
				$value = json_decode($value);
			}
			else
				$value = json_decode($input->default);
		

			if(!empty($value))
				$value = implode('|', $value);

			$f =  $this->form->checkBoxListRow($name, $field.'[]',  $value, $pilihan ,array('CssRadioButton'=>array('radioClass'=>'checkbox-custom checkbox-warning')
				)); 
			return $f;

		}		
		function file($input)
		{
			if(!empty($input->custom_name))
				$name = $input->custom_name;
			else
				$name = $input->name;

			if($input->kategori == 'pendidikan' || $input->kategori == 'berkas')
				$field = $this->getName('fil'.$input->filter.$input->field,$input->kategori);
			else
				$field = $this->getName($input->field,$input->kategori);

			if($input->kategori != 'pendidikan'  AND $input->kategori == 'berkas' AND isset($this->defaultData[$input->kategori][$input->field]))
				$value = $this->defaultData[$input->kategori][$input->field];
			elseif (($input->kategori == 'pendidikan' || $input->kategori == 'berkas' ) AND isset($this->defaultData[$input->kategori]['fil'.$input->filter.$input->field]))
				$value = $this->defaultData[$input->kategori]['fil'.$input->filter.$input->field];
			else
				$value = '';



			if($input->is_enable == 0)
				$class = array('disabled' => 'disabled');	
			else
				$class = array();		

			if(empty($value))
				$value = $input->default;

			$this->form->right = 5;
			if($input->type == 'image')
			{
				$image = "<div class='col-md-4'><div id='logo-before'></div></div>";
				$f =  $this->form->fileFieldRow( $field,$name,array('addDiv'=>$image, 'placeholder' => $input->name,'id'=>'file-input')+$class); 
				$f = $f.'<div class="form-group"><div class="col-md-12"> '.$this->form->labelRow($image,'Preview').'</div></div>';
				$this->CI->template->clientScript('_photo_','
				        $("#file-input").change(function () {
				            $("#file-text").text("");
				            $("#file-text").append("&nbsp;" + this.files[0].name);
				            
				            var $input = $(this);
				            var inputFiles = this.files;
				            if(inputFiles == undefined || inputFiles.length == 0) return;
				            var inputFile = inputFiles[0];
				        
				            var reader = new FileReader();
				            reader.onload = function(event) {
				                //$input.next().attr("src", event.target.result);
				                $("#logo-before").empty();
				                $("#logo-before").append("<img height=\'200\' src=\'"+ event.target.result + "\' title=\'" + escape(event.name) + "\'/>");
				                $("#logo-before").append("<br/><span style=\'font-size:9pt; font-weight:bolder; color:#FE545C;\'>*Preview Gambar</span>");
				            };
				            reader.onerror = function(event) {
				                alert("I AM ERROR: " + event.target.error.code);
				            };
				            reader.readAsDataURL(inputFile);
				        });

				');
			}
			else
				$f =  $this->form->fileFieldRow( $field,$name,array('placeholder' => $input->name,'id'=>'file-input')+$class); 
			return $f;
		}

		function getName($field,$kategori)
		{
			return $kategori."[".$field."]";
		}
		function curlWs($url)
		{
		    $options = array(
		        CURLOPT_RETURNTRANSFER => true,   // return web page
		        CURLOPT_HEADER         => false,  // don't return headers
		        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
		        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
		        CURLOPT_ENCODING       => "",     // handle compressed
		        CURLOPT_USERAGENT      => "Maudaftar.com", // name of client
		        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
		        CURLOPT_CONNECTTIMEOUT => 1200,    // time-out on connect
		        CURLOPT_TIMEOUT        => 1200,    // time-out on response
		    ); 

		    $ch = curl_init($url);
		    curl_setopt_array($ch, $options);

		    $content  = curl_exec($ch);

		    curl_close($ch);

		    return $content;
		}
	}

?>
