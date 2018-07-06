<?php

use Drupal\Core\Form\FormStateInterface;

function fossee_form_system_theme_settings_alter(&$form, &$form_state)
{
    $config = \Drupal::config('fossee.settings');
    $form['front_page_blck'] = array(
        '#type' => 'details',
        '#title' => t('Extra Cards'),
        '#description' => t('Select Wether to enable or disable Block.'),
        '#weight' => -1000,
        // '#open' => true,
    );
####Scilab
    $form['type_scilab'] = array(
        '#type' => 'details',
        '#title' => t('Scilab'),
        '#description' => t('Scilab.'),
        '#weight' => -1000,
        // '#open' => true,
    );

    $form['type_scilab']['scilab_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Scilab Card'),
        '#default_value' => fossee_theme_get_settings('scilab_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );

    $form['type_scilab']['sci_text'] = array(
        '#type' => 'radios',
        '#title' => t('Textbook Companion'),
        '#default_value' => fossee_theme_get_settings('sci_text', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );

    $form['type_scilab']['sci_lab'] = array(
        '#type' => 'radios',
        '#title' => t('Lab Migration'),
        '#default_value' => fossee_theme_get_settings('sci_lab', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
####Scilab

####eSim
    $form['type_esim'] = array(
        '#type' => 'details',
        '#title' => t('eSim'),
        '#description' => t('esim.'),
        '#weight' => -1000,
        // '#open' => true,
    );
    $form['type_esim']['esim_text'] = array(
        '#type' => 'radios',
        '#title' => t('Textbook Companion'),
        '#default_value' => fossee_theme_get_settings('esim_text', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );

    $form['type_esim']['esim_lab'] = array(
        '#type' => 'radios',
        '#title' => t('Lab Migration'),
        '#default_value' => fossee_theme_get_settings('esim_lab', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['type_esim']['esim_blck'] = array(
        '#type' => 'radios',
        '#title' => t('eSim Card'),
        '#default_value' => fossee_theme_get_settings('esim_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
####

######################DWSIM
    $form['type_dwsim'] = array(
        '#type' => 'details',
        '#title' => t('DWSIM'),
        '#description' => t('esim.'),
        '#weight' => -1000,
        // '#open' => true,
    );
    $form['type_dwsim']['dwsim_text'] = array(
        '#type' => 'radios',
        '#title' => t('Textbook Companion'),
        '#default_value' => fossee_theme_get_settings('dwsim_text', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['type_dwsim']['dwsim_blck'] = array(
        '#type' => 'radios',
        '#title' => t('DWSIM Card'),
        '#default_value' => fossee_theme_get_settings('dwsim_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
#####################

####OpenFoam
    $form['type_openf'] = array(
        '#type' => 'details',
        '#title' => t('OpenFOAM'),
        '#description' => t('OpenFOAM.'),
        '#weight' => -1000,
        // '#open' => true,
    );
    $form['type_openf']['openf_text'] = array(
        '#type' => 'radios',
        '#title' => t('Textbook Companion'),
        '#default_value' => fossee_theme_get_settings('openf_text', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['type_openf']['openf_lab'] = array(
        '#type' => 'radios',
        '#title' => t('Lab Migration'),
        '#default_value' => fossee_theme_get_settings('openf_lab', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['type_openf']['of_blck'] = array(
        '#type' => 'radios',
        '#title' => t('openFOAM Card'),
        '#default_value' => fossee_theme_get_settings('of_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
####OpenFoam

####OR-TOOLs
    $form['type_or'] = array(
        '#type' => 'details',
        '#title' => t('Or Tools'),
        '#description' => t('Or Tools.'),
        '#weight' => -1000,
        // '#open' => true,
    );
    $form['type_or']['or_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Or Tools Card'),
        '#default_value' => fossee_theme_get_settings('or_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['type_or']['or_text'] = array(
        '#type' => 'radios',
        '#title' => t('Textbook Companion'),
        '#default_value' => fossee_theme_get_settings('or_text', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
####

    $form['front_page_blck']['python_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Python Card'),
        '#default_value' => fossee_theme_get_settings('python_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );

    $form['front_page_blck']['osdag_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Osdag Card'),
        '#default_value' => fossee_theme_get_settings('osdag_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );

    $form['front_page_blck']['om_blck'] = array(
        '#type' => 'radios',
        '#title' => t('OpenModelica Card'),
        '#default_value' => fossee_theme_get_settings('om_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['sandhi_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Sandhi Card'),
        '#default_value' => fossee_theme_get_settings('sandhi_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['plc_blck'] = array(
        '#type' => 'radios',
        '#title' => t('OpenPLC Card'),
        '#default_value' => fossee_theme_get_settings('plc_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['sa_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Scilab-Arduino Card'),
        '#default_value' => fossee_theme_get_settings('sa_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['sbhs_blck'] = array(
        '#type' => 'radios',
        '#title' => t('SBHS Card'),
        '#default_value' => fossee_theme_get_settings('sbhs_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['r_blck'] = array(
        '#type' => 'radios',
        '#title' => t('R Card'),
        '#default_value' => fossee_theme_get_settings('r_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );

    $form['#prefix'] = '<div id="sponsorship-form-wrapper">';
    $form['#suffix'] = '</div>';

    $no_imgs = $form_state->get('no_imgs');

    if (empty($no_imgs)) {
        $no_imgs = 1;
        $form_state->set('no_imgs', $no_imgs);
    }

    $form['anim_imgs'] = array(
        '#type' => 'details',
        '#weight' => -100,
        '#open' => true,
        '#title' => 'Animation Images',
    );

    $form['anim_imgs']['thecontainer'] = [
        '#type' => 'container',
        '#prefix' => '<div id="thecontainer--wrapper">',
        '#suffix' => '</div>',
    ];

    $form['anim_imgs']['thecontainer']['table'] = array('#markup' => '<table>');
    $all_imgs = $config->get('all_imgs');
    for ($i = 0; $i < count($all_imgs); $i++) {
        if ($form_state->get('up_anim_img_' . $i) !== false) {
            $form['anim_imgs']['thecontainer']['up_an_img_' . $i] = array(
                '#type' => 'markup',
                '#prefix' => '<tr><td>',
                '#markup' => '' . $all_imgs[$i],
                '#suffix' => '</td>',
            );
            $form['anim_imgs']['thecontainer']['up_img_del_' . $i] = array(
                '#type' => 'submit',
                '#name' => 'up_img_delete_'.$i,
                '#value' => 'Delete',
                '#prefix' => '<td>',
                '#suffix' => '</td></tr>',
                '#submit' => array('UPimageDelete'),
                '#ajax' => array(
                    'callback' => 'addImgCallback',
                    'wrapper' => 'thecontainer--wrapper',
                ),
            );
        }
    }

    for ($i = 0; $i < $no_imgs; $i++) {
        $val = $form_state->get("uploaded_anim_img_" . $i);
        if ($form_state->get('anim_img_' . $i) !== false) {
            $form['anim_imgs']['thecontainer']['anim_img_' . $i] = array(
                '#type' => 'file',
                '#description' => $val,
                '#prefix' => '<tr><td>',
                '#attributes' => (empty($val)) ? array() : array('disabled' => true),
                '#suffix' => '</td>',
            );
            $form['anim_imgs']['thecontainer']['img_delete_' . $i] = array(
                '#type' => 'submit',
                '#name' => 'img_delete_' . $i,
                '#value' => 'Delete',
                '#prefix' => '<td>',
                '#suffix' => '</td></tr>',
                '#submit' => array('imageDelete'),
                '#ajax' => array(
                    'callback' => 'addImgCallback',
                    'wrapper' => 'thecontainer--wrapper',
                ),
            );
        }
    }
    $form['anim_imgs']['thecontainer']['tablee'] = array('#markup' => '</table>');

    $form['anim_imgs']['thecontainer']['add_img_btn'] = [
        '#type' => 'submit',
        '#value' => t('Add Image'),
        '#submit' => array('addImage'),
        '#ajax' => [
            'callback' => 'addImgCallback',
            'wrapper' => 'thecontainer--wrapper',
        ],
    ];

    $form['fossee_logo'] = array(
        '#type' => 'details',
        '#title' => t('Logo'),
        '#description' => t('Select the logo.'),
        '#weight' => -1000,
        '#open' => true,
    );

    $form['fossee_logo']['the_logo'] = array(
        '#type' => 'file',
        '#title' => 'Upload Logo img',
    );
    $form['#submit'][] = 'fossee_form_submit';
    return $form;
}

function imageDelete(array &$form, FormStateInterface $form_state)
{
    $tg = $form_state->getTriggeringElement();
    if ($tg != null) {
        $ind = (int) str_replace("img_delete_", "", $tg['#name']);
        $form_state->set("anim_img_" . $ind, false);
    }
    $form_state->setRebuild();
}
function UPimageDelete(array &$form, FormStateInterface $form_state)
{
    $tg = $form_state->getTriggeringElement();
    $config = \Drupal::configFactory()->getEditable('fossee.settings');
    $connection = \Drupal::database();
    $all_imgs = $config->get('all_imgs');
    $ind = (int) str_replace("up_img_delete_", "", $tg['#name']);
    $fid = $connection->query("DELETE FROM {file_managed} WHERE uri = :path", array(':path' => $all_imgs[$ind]));
    $ret = unlink(str_replace('public://', 'sites/default/files/', $all_imgs[$ind]));
    array_splice($all_imgs, $ind, 1);
    $form_state->set("up_anim_img_" . $ind, false);
    $config->set("all_imgs", $all_imgs);
    $config->save();
    $form_state->setRebuild();
}

function ajaxRebuildForm(array &$form, FormStateInterface $form_state)
{
    return $form;
}

function addImgCallback(array &$form, FormStateInterface $form_state)
{
    return $form['anim_imgs']['thecontainer'];
}

function addImage(array &$form, FormStateInterface $form_state)
{
    $ind = $form_state->get('no_imgs');
    $form_state->set('no_imgs', $ind + 1);
    $imgValidator = array(
        'file_validate_size' => array(
            '2097152',
        ),
        'file_validate_extension' => array(
            'png jpg bmp jpeg gif',
        ),
    );
    $key = 'anim_img_' . ($ind - 1);
    if ($imgFile = file_save_upload((string) $key, $imgValidator, "public://", FILE_EXISTS_RENAME)) {
        $form_state->set('uploaded_' . $key, $imgFile->destination);
    }
    $form_state->setRebuild();
}

function fossee_form_submit(array &$form, FormStateInterface $form_state)
{
    $all = $form_state->get('no_imgs');
    $imgValidator = array(
        'file_validate_size' => array(
            '2097152',
        ),
        'file_validate_extension' => array(
            'png jpg bmp jpeg gif',
        ),
    );
    $connection = \Drupal::database();
    $config = \Drupal::configFactory()->getEditable('fossee.settings');
    $imgs = $config->get("all_imgs");
    if ($imgFile = file_save_upload('the_logo', $imgValidator, "public://", FILE_EXISTS_RENAME)) {
        $config->set("the_logo", $imgFile->destination);
    }
    $key = 'anim_img_' . ($all - 1);
    if ($imgFile = file_save_upload((string) $key, $imgValidator, "public://", FILE_EXISTS_RENAME)) {
        $form_state->set('uploaded_' . $key, $imgFile->destination);
    }
    $k = count($imgs);
    for ($i = 0; $i < $all; $i++) {
        if ($form_state->get('anim_img_' . $i) !== false) {
            $val = $form_state->get("uploaded_anim_img_" . $i);
            $key = 'anim_img_' . $k;
            if (!empty($val)) {
                $imgs[] = $val;
            }
        } else {
            $val = $form_state->get("uploaded_anim_img_" . $i);
            $fid = $connection->query("DELETE FROM {file_managed} WHERE uri = :path", array(':path' => $val));
            $ret = unlink(str_replace('public://', 'sites/default/files/', $val));
        }
    }
    $config->set('all_imgs', $imgs);
    $config->save();
}
