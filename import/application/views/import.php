<html>
<head>
    <title>Generate Query</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            padding: 20px 50px;
        }
        input[type="file"] {
            display:block;
            border: 1px solid #b5b5b5;
            border-radius: 2px;
            padding: 5px;
            font-size: 16px;
            color: #777;
        }
        button[type="submit"] {
            background: #06c;
            border-color: #06c;
            outline: none;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            border-radius: 3px;
            padding: 5px 10px;
        }
        .help {
            font-size: 12px;
            color: #b5b5b5;
            margin-top: 2px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?= form_open_multipart(); ?>
        <input type="file" name="excel" />
        <button type="submit" name="submit" value="upload">Upload</button>
    <?= form_close(); ?>

    <br>

<!-- <?php $no=2606; foreach ($hasil as $h): ?>
UPDATE user_installed_program SET distributor_code='<?php echo $h->field3 ?>' WHERE customer_id=(SELECT id FROM user_customer_map<br> WHERE
principal_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id
<br>WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field2 ?>' LIMIT 1) AND
distributor_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id
<br>WHERE uc.customer_type = 'distributor' AND un.alias_name ILIKE '%<?php echo $h->field1 ?>%' LIMIT 1));
<br><br>
<?php endforeach; ?> -->

<!--  <?php $no=1; foreach ($hasil as $h): ?>

 WITH deletedLisence AS (<br>
   SELECT id FROM user_installed_program <br>
   WHERE ns_code = '<?php echo $h->field3 ?>' AND branch_id='<?php echo $h->field4 ?>' AND deleted = false AND <br>
   customer_id = (SELECT id FROM user_customer_map WHERE<br>
        principal_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id
        WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field2 ?>' LIMIT 1)<br> AND
        distributor_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id<br>
        WHERE uc.customer_type = 'distributor' AND un.alias_name 
    ILIKE '%<?php echo $h->field1 ?>%' LIMIT 1))<br>
   LIMIT (CASE WHEN (SELECT COUNT(*) FROM user_installed_program WHERE ns_code = '<?php echo $h->field3 ?>' AND branch_id='<?php echo $h->field4 ?>' AND deleted = false AND <br>
   customer_id = (SELECT id FROM user_customer_map WHERE<br>
        principal_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id
        WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field2 ?>' LIMIT 1)<br> AND
        distributor_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id<br>
        WHERE uc.customer_type = 'distributor' AND un.alias_name 
    ILIKE '%<?php echo $h->field1 ?>%' LIMIT 1))<br>) < 2<br> THEN 0 ELSE ((SELECT COUNT(*) FROM user_installed_program WHERE ns_code = '<?php echo $h->field3 ?>' AND branch_id='<?php echo $h->field4 ?>' AND deleted = false AND <br>
   customer_id = (SELECT id FROM user_customer_map WHERE<br>
        principal_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id
        WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field2 ?>' LIMIT 1)<br> AND
        distributor_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id<br>
        WHERE uc.customer_type = 'distributor' AND un.alias_name 
    ILIKE '%<?php echo $h->field1 ?>%' LIMIT 1))<br>)-1) END)<br>                 
   )<br>
UPDATE user_installed_program uip SET deleted = true <br>
FROM   deletedLisence<br>
WHERE  uip.id = deletedLisence.id;<br>

<br>
<?php endforeach; ?> -->

<!-- INSERT INTO user_installed_program(customer_id, ns_code, license, branch_id, client_id,<br> 
created_by, created_at, updated_by, updated_at, deleted)VALUES<br>
    <?php $no=2606; foreach ($hasil as $h): ?>
((SELECT id FROM user_customer_map WHERE<br> 
principal_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id<br> WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field3 ?>' LIMIT 1)
 AND<br> distributor_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id<br> WHERE uc.customer_type = 'distributor' AND un.alias_name ILIKE '%<?php echo $h->field5 ?>%' LIMIT 1)),<br>
 '<?php echo $h->field1 ?>', 'A', '<?php echo $h->field2 ?>', '<?php echo $h->field6 ?>',
1, CURRENT_TIMESTAMP , 1, CURRENT_TIMESTAMP , false),<br>

<?php endforeach; ?> -->

<!-- <?php $no=2606; foreach ($hasil3 as $h): ?>
INSERT INTO resource_nexcare_2.user_customer_map(principal_id, distributor_id)<br>
select (SELECT uc.id FROM resource_nexcare_2.user_customer uc<br>
        INNER JOIN resource_nexcare_2.user_nexcare un on un.id = uc.customer_id<br>
        WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field3 ?>' LIMIT 1),<br>
       (SELECT uc.id FROM resource_nexcare_2.user_customer uc INNER JOIN resource_nexcare_2.user_nexcare un on un.id = uc.customer_id <br>
  WHERE uc.customer_type = 'distributor' AND un.alias_name ILIKE '%<?php echo $h->field5 ?>%' LIMIT 1)<br>
  WHERE NOT EXISTS (select 1 from resource_nexcare_2.user_customer_map WHERE principal_id=(SELECT uc.id FROM <br>resource_nexcare_2.user_customer uc INNER JOIN resource_nexcare_2.user_nexcare un on un.id = uc.customer_id WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field3 ?>' LIMIT 1)<br>
  AND distributor_id=(SELECT uc.id FROM resource_nexcare_2.user_customer uc INNER JOIN resource_nexcare_2.user_nexcare un on un.id = uc.customer_id <br>WHERE uc.customer_type = 'distributor' AND un.alias_name ILIKE '%<?php echo $h->field5 ?>%' LIMIT 1));<br><br>

<?php endforeach; ?> -->
[
<?php $no=0; foreach ($hasil as $h): ?>
{"field_name":"<?php echo $h->field1 ?>","is_show":false,"index":<?= $no; ?>},<br><?php $no++; ?><?php endforeach; ?>]

<!--     INSERT INTO resource_nexcare_2.user_customer_map(principal_id, distributor_id)VALUES <br>
<?php $no=2606; foreach ($hasil2 as $h): ?>
((SELECT uc.id FROM resource_nexcare_2.user_customer uc<br>
         INNER JOIN resource_nexcare_2.user_nexcare un on un.id = uc.customer_id<br>
         WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field2 ?>'),<br>
        (SELECT uc.id FROM resource_nexcare_2.user_customer uc<br>
         INNER JOIN resource_nexcare_2.user_nexcare un on un.id = uc.customer_id<br>
         WHERE uc.customer_type = 'distributor' AND un.alias_name = '<?php echo $h->field1 ?>')),<br>
<?php endforeach; ?> -->

<!--     INSERT INTO user_installed_program(customer_id, ns_code)VALUES <br>
<?php $no=2606; foreach ($hasil3 as $h): ?>
((SELECT id FROM user_customer_map WHERE principal_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id WHERE uc.customer_type = 'principal' AND un.alias_name = '<?php echo $h->field2 ?>') <br>
AND distributor_id=(SELECT uc.id FROM user_customer uc INNER JOIN user_nexcare un on un.id = uc.customer_id WHERE uc.customer_type = 'distributor' AND un.alias_name = '<?php echo $h->field1 ?>') LIMIT 1), <br>
'<?php echo $h->field3 ?>'),<br>
<?php endforeach; ?> -->

<!--     INSERT INTO customer_list_registration (company_id, branch_id, company_name, city, implementer, product, version, license_type, user_amount)VALUES<br>
    <?php foreach ($hasil as $h): ?> 
         ('<?php echo $h->field1 ?>','<?php echo $h->field2 ?>','<?php echo $h->field3 ?>','<?php echo $h->field4 ?>','<?php echo $h->field5 ?>', '<?php echo $h->field6 ?>', '<?php echo $h->field7 ?>', '<?php echo $h->field8 ?>', <?php echo $h->field9 ?>),
<br>
    <?php endforeach; ?>  -->

<!-- INSERT INTO resource_nexcare.user_role_scope(client_id, role_id, group_id, uuid_key,<br> 
updated_client, created_by, created_at, updated_by, updated_at, deleted)<br>
VALUES<br> -->
    <!-- <?php foreach ($hasil as $h): ?>
((select client_id from resource_nexcare.user_nexcare where first_name='<?php echo $h->field1 ?>'),<br> 
(select id from resource_nexcare.role where role_id='<?php echo $h->field2 ?>'), NULL, public.uuid_generate_v4(),<br>
NULL, 1, CURRENT_TIMESTAMP, 1, CURRENT_TIMESTAMP, false),
        <br>
    <?php endforeach; ?>  -->

 <!--    <?php $no=1; foreach ($hasil as $h): ?>

"INSERT INTO user_role_scope(client_id, role_id, group_id, uuid_key," +
        "updated_client, created_by, created_at, updated_by, updated_at, deleted) " +
        "select " +
        "(select client_id from user_nexcare where username='<?php echo $h->field1 ?>')," +
        "(select id from role where role_id='<?php echo $h->field2 ?>'), NULL, public.uuid_generate_v4()," +
        "NULL, 1, CURRENT_TIMESTAMP, 1, CURRENT_TIMESTAMP, false " +
        "WHERE NOT EXISTS (" +
        "select 1 from user_role_scope where client_id = (select client_id from " +
        "user_nexcare where username='<?php echo $h->field1 ?>')" +
        "); " +
        <br><br>
    <?php endforeach; ?>  -->

<!--  <?php $no=1; foreach ($hasil as $h): ?>
UPDATE user_customer set company_profile_id='<?php echo $h->field6 ?>' WHERE<br>
customer_id = (select id from user_nexcare where alias_name='<?php echo $h->field1 ?>' AND city='<?php echo $h->field2 ?>');<br><br>
<?php endforeach; ?> -->

<!-- <?php $no=2606; foreach ($hasil as $h): ?>
('', 'distributor',<br>
    (select id from user_nexcare where alias_name='<?php echo $h->field1 ?>' AND city='<?php echo $h->field2 ?>')<br>
        , '', CURRENT_TIMESTAMP, 1, CURRENT_TIMESTAMP, 1, false, 0),<br>
<?php endforeach; ?> -->


<!-- <?php $no=2606; foreach ($hasil3 as $h): ?>
INSERT INTO user_nexcare(is_admin,  updated_client, username, first_name, last_name, email,<br>
  phone, locale, status, signature_key, client_id, last_token, created_by, created_at,<br>
  updated_by, updated_at, deleted, alias_name, city, distributor_code, address)<br>
select false, NULL, NULL,NULL, NULL, NULL,<br>
        NULL, NULL, false, NULL, '', NULL, 1, CURRENT_TIMESTAMP ,<br>
        1, CURRENT_TIMESTAMP , false, '<?php echo $h->field1 ?>',<br>
        '<?php echo $h->field5 ?>', '<?php echo $h->field2 ?>', '<?php echo $h->field4 ?>' <br>
WHERE NOT EXISTS (select 1 from user_nexcare<br>
where alias_name='<?php echo $h->field1 ?>');<br>
<br>
<?php endforeach; ?>

 <?php $no=2606; foreach ($hasil3 as $h): ?>
INSERT INTO user_customer(customer_code, customer_type, customer_id,<br>
updated_client, created_at, created_by, updated_at, updated_by, deleted, company_profile_id)<br>
 select '', 'distributor',<br>
  (select id from user_nexcare where alias_name='<?php echo $h->field1 ?>')<br>
     , '', CURRENT_TIMESTAMP, 1, CURRENT_TIMESTAMP, 1, false, <?php echo $h->field6 ?> <br>
 WHERE NOT EXISTS (select 1 from user_customer where <br>
customer_id=(select id from user_nexcare where alias_name='<?php echo $h->field1 ?>'));<br>
<br>
<?php endforeach; ?>

<?php $no=2606; foreach ($hasil3 as $h): ?>
      UPDATE user_nexcare set distributor_code='<?php echo $h->field2 ?>'<br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WHERE id=(select id from user_nexcare WHERE alias_name='<?php echo $h->field1 ?>');<br>
<br>
<?php endforeach; ?> -->

</body>
</html>