<?php

 /**
 * @version		$Id: default_form.php 11845 2009-05-27 23:28:59Z robs
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
$this->form->reset( true ); // to reset the form xml loaded by the view
$this->form->loadFile( dirname(__FILE__) . DS . "contact.xml"); // to load in our own version of contact.xml
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
				
		<?php echo JText::_('COM_CONTACT_FORM_LABEL'); ?>
				<div><?php echo $this->form->getLabel('contact_name'); ?></div>
				<div><?php echo $this->form->getInput('contact_name'); ?></div>
				<div><?php echo $this->form->getLabel('contact_email'); ?></div>
				<div><?php echo $this->form->getInput('contact_email'); ?></div>
				<div><?php echo $this->form->getLabel('contact_subject'); ?></div>
				<div><?php echo $this->form->getInput('contact_subject'); ?></div>
				<div><?php echo $this->form->getLabel('contact_message'); ?></div>
				<div><?php echo $this->form->getInput('contact_message'); ?></div>
				<?php 	if ($this->params->get('show_email_copy')){ ?>
						<div><?php echo $this->form->getLabel('contact_email_copy'); ?></div>
						<div><?php echo $this->form->getInput('contact_email_copy'); ?></div>
				<?php 	} ?>
                
	     <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			          <?php if ($fieldset->name != 'contact'):?>
			               <?php $fields = $this->form->getFieldset($fieldset->name);?>
			               <?php foreach($fields as $field): ?>
			                    <?php if ($field->hidden): ?>
			                         <?php echo $field->input;?>
			                    <?php else:?>
			                         <div>
			                            <?php echo $field->label; ?>
			                            <?php if (!$field->required && $field->type != "Spacer"): ?>
			                               <span CLASS="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
			                            <?php endif; ?>
			                         </div>
			                         <div><?php echo $field->input;?></div>
			                    <?php endif;?>
			               <?php endforeach;?>
			          <?php endif ?>
			     <?php endforeach;?>
				<div></div>
				<div><button class="button validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="id" value="<?php echo $this->contact->id; ?>" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</div>
	</form>
</div>