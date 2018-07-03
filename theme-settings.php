<?php

use Drupal\Core\Form\FormStateInterface;

function fossee_form_system_theme_settings_alter(&$form, &$form_state)
{

    $form['front_page_blck'] = array(
        '#type' => 'details',
        '#title' => t('Front Page Cards'),
        '#description' => t('Select Wether to enable or disable Block.'),
        '#weight' => -1000,
        '#open' => true,
    );

    $form['front_page_blck']['scilab_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Scilab Card'),
        '#default_value' => fossee_theme_get_settings('scilab_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['python_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Python Card'),
        '#default_value' => fossee_theme_get_settings('python_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['esim_blck'] = array(
        '#type' => 'radios',
        '#title' => t('eSim Card'),
        '#default_value' => fossee_theme_get_settings('esim_blck', 1),
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
    $form['front_page_blck']['dwsim_blck'] = array(
        '#type' => 'radios',
        '#title' => t('DWSIM Card'),
        '#default_value' => fossee_theme_get_settings('dwsim_blck', 1),
        '#options' => array(
            0 => t('Disabled'),
            1 => t('Enabled'),
        ),
    );
    $form['front_page_blck']['of_blck'] = array(
        '#type' => 'radios',
        '#title' => t('openFOAM Card'),
        '#default_value' => fossee_theme_get_settings('of_blck', 1),
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
    $form['front_page_blck']['or_blck'] = array(
        '#type' => 'radios',
        '#title' => t('Or Tools Card'),
        '#default_value' => fossee_theme_get_settings('or_blck', 1),
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

    $form['sponsor'] = [
        '#type' => 'fieldset',
        // '#title' => t('You (sponsor)'),
        '#prefix' => '<div class="quick-contact__form col-xs-12 col-md-6">',
        '#suffix' => '</div>',
    ];

    $form['sponsor']['submit'] = [
        '#type' => 'submit',
        '#value' => t('Send'),
        '#attributes' => [
            'class' => ['btn btn-full'],
        ],
        '#ajax' => array(
            'wrapper' => 'sponsorship-form-wrapper',
            'callback' => 'ajaxRebuildForm',
            'effect' => 'fade',
            'progress' => array('message' => '', 'type' => 'throbber'),
        ),
    ];

    $nb_sponsee = $form_state->get('nb_sponsee');
    $form['sponsees'] = [
        '#type' => 'container',
        '#prefix' => '<div id="sponsees-fieldset-wrapper" class="quick-contact__form col-xs-12 col-md-6">',
        '#suffix' => '</div>',
    ];

    if (empty($nb_sponsee)) {
        $nb_sponsee = 1;
        $form_state->set('nb_sponsee', $nb_sponsee);
    }

    $form['anim_imgs'] = array(
        '#type' => 'details',
        '#weight' => -100,
        '#open' => true,
        '#title' => 'Animation Images',
    );
    for ($i = 0; $i < $nb_sponsee; $i++) {
        $form['anim_imgs']['img'] = array(
            '#type' => 'file',
        );
    }

    if ($nb_sponsee < 6) {
        $form['anim_imgs']['add_sponsee'] = [
            '#type' => 'submit',
            '#value' => t('Add Image'),
            '#submit' => array('addSponcee'),
            '#ajax' => [
                'callback' => 'addSponceeCallback',
                'wrapper' => 'sponsees-fieldset-wrapper',
            ],
        ];
    }

    return $form;
}

function ajaxRebuildForm(array &$form, FormStateInterface $form_state)
{
    return $form;
}

function addSponceeCallback(array &$form, FormStateInterface $form_state)
{
    return $form['anim_imgs']['img'];
}

function addSponcee(array &$form, FormStateInterface $form_state)
{
    $form_state->set('nb_sponsee', $form_state->get('nb_sponsee') + 1);
    $form_state->setRebuild();
}
