<?php
$this->Html->css('BootstrapUI.signin', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', array(
        $this->request->controller, $this->request->action
    )) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>
    <div class="container">
<?php
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->start('tb_footer');
echo ' ';
$this->end();

$this->append('content', '</div>');
echo $this->fetch('tb_body_start');
echo $this->fetch('content');
echo $this->fetch('tb_body_end');
