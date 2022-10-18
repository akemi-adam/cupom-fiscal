<?php

uses()->group('enterprise');

it('has dashboard page')->get('/')->assertStatus(200);

it('has enterprise create page')->get('/enterprise/create')->assertStatus(200);