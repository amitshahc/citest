<?php

echo form_open();
echo form_label('Username:', 'uname');
echo form_input('uname', set_value('uname'), 'placeholder="User name"');
echo br();
echo form_label('Password:', 'pword');
echo form_password('pword', '', 'placeholder="Password"');
echo form_submit('submit', 'Login');
echo form_close();

echo validation_errors();