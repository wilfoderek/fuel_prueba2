<?php

class Controller_Personas extends Controller_Template {

    public function action_index() {
        $data["subnav"] = array('index' => 'active');

//             $info= Model_Persona::find('all')->to_object();
//                $info= Model_Persona::getPersona();
        $info = DB::select()->from('personas')->execute()->as_array();
        //$info= Model_Persona::getPersona();
        $data["personas"] = $info;
        $this->template->title = 'Personas &raquo; Index';
//		$this->template->content = View::forge('personas/index', $data);
        $this->template->set('content', view::forge('personas/index', $data), FALSE);
    }

    public function action_create() {
        $data["subnav"] = array('create' => 'active');
        $this->template->title = 'Personas &raquo; Create';
        $this->template->content = View::forge('personas/create', $data);


        $fieldset = Fieldset::forge()->add_model('Model_Persona')->repopulate();
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Crear', 'class' => 'btn medium primary'));

        if ($fieldset->validation()->run() == true) {
            $fields = $fieldset->validated();

            $persona = new Model_Persona();
            $persona->nombre = $fields['nombre'];
            $persona->apellido = $fields['apellido'];

            if ($persona->save()) {
                \Response::redirect('personas/index');
            }
        } else {
            $this->template->messages = $fieldset->validation()->error();
        }

        $this->template->set('content', $form->build(), false);
    }

    public function action_edit($id = null) {
        $data["subnav"] = array('edit' => 'active');
        $this->template->title = 'Personas &raquo; Edit';
        $this->template->content = View::forge('personas/edit', $data);


        $persona = \Model_Persona::find($id);

        $fieldset = Fieldset::forge()->add_model('Model_Persona')->populate($persona); //model post object is passed to the populate method
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Save', 'class' => 'btn medium primary'));

        if ($fieldset->validation()->run() == true) {
            $fields = $fieldset->validated();

            //$post = new Model_Persona;
            $persona->nombre = $fields['nombre'];
            $persona->apellido = $fields['apellido'];


            if ($persona->save()) {
               // \Response::redirect('personas/index');
                \Response::redirect('personas/index');
            }
        } else {
            $this->template->messages = $fieldset->validation()->error();
        }

        $this->template->set('content', $form->build(), false);
    }

    public function action_view() {
        $data["subnav"] = array('view' => 'active');
        $this->template->title = 'Personas &raquo; View';
        $this->template->content = View::forge('personas/view', $data);
    }

}
