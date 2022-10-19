<?php

uses()->group('receipts');

it('has receipt create page')->get('/receipt/create')->assertStatus(200);
