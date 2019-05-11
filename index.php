<?php

// Initialise the Mapper.
$userMapper = new UserMapper();

// Fetch and manipulate the User object
$user = $userMapper->findById(1);
$user->lastname = 'Alker';

// Tell the UserMapper that the User needs to be saved.
$userMapper->save($user);