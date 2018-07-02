<?php

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\InvokeCommand;

function fossee_form_system_theme_settings_alter(&$form, &$form_state) {
    
    // $items_per_page = \Drupal::config('fossee.settings')->get('fossee_logo');
    // dpm($items_per_page);
    $form['front_page_blck'] = array(
        '#type' => 'details',
        '#title' => t('Front Page Cards'),
        '#description'  => t('Select Wether to enable or disable Block.'),
        '#weight' => -1000,
        '#open' => TRUE,
    );

    $form['front_page_blck']['scilab_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Scilab Card'),
        '#default_value' => fossee_theme_get_settings('scilab_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );
    $form['front_page_blck']['python_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Python Card'),
        '#default_value' => fossee_theme_get_settings('python_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );
    $form['front_page_blck']['esim_blck'] = array(
        '#type' => 'radios',
        '#title' => t('eSim Card'),
        '#default_value' => fossee_theme_get_settings('esim_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );
    $form['front_page_blck']['osdag_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Osdag Card'),
        '#default_value' => fossee_theme_get_settings('osdag_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );
    $form['front_page_blck']['dwsim_blck'] = array(
        '#type' => 'radios',
        '#title' => t('DWSIM Card'),
        '#default_value' => fossee_theme_get_settings('dwsim_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    ); 
    $form['front_page_blck']['of_blck'] = array(
        '#type' => 'radios',
        '#title' => t('openFOAM Card'),
        '#default_value' => fossee_theme_get_settings('of_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );
    $form['front_page_blck']['om_blck'] = array(
        '#type' => 'radios',
        '#title' => t('OpenModelica Card'),
        '#default_value' => fossee_theme_get_settings('om_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );     
    $form['front_page_blck']['or_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Or Tools Card'),
        '#default_value' => fossee_theme_get_settings('or_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    ); 
    $form['front_page_blck']['sandhi_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Sandhi Card'),
        '#default_value' => fossee_theme_get_settings('sandhi_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    ); 
    $form['front_page_blck']['plc_blck'] = array(
        '#type' => 'radios',
        '#title' => t('OpenPLC Card'),
        '#default_value' => fossee_theme_get_settings('plc_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    ); 
    $form['front_page_blck']['sa_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Scilab-Arduino Card'),
        '#default_value' => fossee_theme_get_settings('sa_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    ); 
    $form['front_page_blck']['sbhs_blck'] = array(
        '#type' => 'radios',
        '#title' => t('SBHS Card'),
        '#default_value' => fossee_theme_get_settings('sbhs_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    ); 
    $form['front_page_blck']['r_blck'] = array(
        '#type' => 'radios',
        '#title' => t('R Card'),
        '#default_value' => fossee_theme_get_settings('r_blck',1),
        '#options' => array(
          0 => t('Disabled'),
          1 => t('Enabled')
        ),
    );
    $form['front_page_imgs'] = array(
        '#type'=> 'details',
        '#title'=> t('Front Page Images'),
        '#description'=> t('Select the images.'),
        '#weight' => -1000,
        '#open' => TRUE,
    );
    $form['front_page_imgs']['img_one'] = array(
        '#type'=>'file',
        '#title'=>'First Animation Image',
    );
    $form['front_page_imgs']['img_one_ena'] = array(
        '#type' => 'select',
        '#title' => t('Selected'),
        '#options' => array(
           0 => t('Disable'),
          1 => t('Enable'),
        ),
        '#default_value' => 1,
        '#description' => t('Set this to <em>Yes</em> if you would like this category to be selected by default.'),
    );
    $form['front_page_imgs']['img_two'] = array(
        '#type'=>'file',
        '#title'=>'Second Animation Image',
    );
    $form['front_page_imgs']['img_three'] = array(
        '#type'=>'file',
        '#title'=>'Third Animation Image',
    );
    $form['front_page_imgs']['img_four'] = array(
        '#type'=>'file',
        '#title'=>'Fourth Animation Image',
    );

    $form['fossee_logo'] = array(
        '#type'=> 'details',
        '#title'=> t('Logo'),
        '#description'=> t('Select the logo.'),
        '#weight' => -1000,
        '#open' => TRUE,
    );
    $form['fossee_logo']['the_logo'] = array(
        '#type'=>'file',

        // '#name'=>'the_logo',
        '#title'=>'Upload Logo img',
        // '#upload_location'=>'public://uploads'
    );


    return $form;
}

if(!function_exists('fossee_theme_get_settings')){
    function fossee_theme_get_settings($key,$default){
        $val = theme_get_setting($key);
        if($val == NULL || $val == '')
            return $default;
        return $val;
    }
}