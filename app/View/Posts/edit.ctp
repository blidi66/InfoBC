 <?php echo $this->Form->create('Post'); ?>

     <fieldset>
    <legend><?php echo __('Modifier Employer'); ?></legend>

    <?php 
    echo $this->Form->input('nom');
    echo $this->Form->input('prenom');
    echo $this->Form->input('Adresse');
    echo $this->Form->input('telephone');
    echo $this->Form->input('poste');
  
?>
</fieldset> <?php echo $this->Form->end(__('modifier')); ?>