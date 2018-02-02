<?php
return array (
  'success' => 'การดำเนินงานที่ประสบความสำเร็จ',
  'fails' => 'ดำเนินการล้มเหลว',
  'menu_not_exist' => 'เมนูไม่อยู่',
  'empty_list' => 'รายการข้อมูลเป็นที่ว่างเปล่า',
  'data_error' => 'ข้อมูลผิดพลาด',
  'parent_id' => 
  array (
    'required' => 'เมนูผู้ปกครองของคุณต้องไม่ว่างเปล่า',
  ),
  'class' => 
  array (
    'required' => 'ประเภทเมนูไม่สามารถเป็นโมฆะ',
    'integer' => 'เมนูประเภทประเภทฟิลด์เท่านั้นที่สามารถจะเป็นชนิดจำนวนเต็ม',
    'max' => 'ประเภทเมนูสามารถป้อน 0-9',
  ),
  'title_cn' => 
  array (
    'required' => 'ชื่อเมนูจีนต้องไม่ว่างเปล่า',
    'max' => 'เมนูจีนเท่านั้นที่สามารถใส่ชื่อของสูงสุด 45 ตัวอักษร',
  ),
  'title_en' => 
  array (
    'required' => 'ชื่อเมนูภาษาอังกฤษต้องไม่ว่างเปล่า',
    'max' => 'ชื่อเมนูภาษาอังกฤษเท่านั้นสามารถใส่ได้สูงสุด 45 ตัวอักษร',
  ),
  'icon' => 
  array (
    'required' => 'ไอคอนเมนูต้องไม่ว่างเปล่า',
  ),
  'link_url' => 
  array (
    'required' => 'ที่อยู่เมนูลิงค์ต้องไม่ว่างเปล่า',
    'max' => 'ที่อยู่เมนูลิงค์เท่านั้นที่สามารถใส่ได้สูงสุด 255 ตัวอักษร',
  ),
  'sort' => 
  array (
    'required' => 'เมนูจัดเรียงต้องไม่ว่างเปล่า',
    'integer' => 'เมนูจัดเรียงใส่ได้เฉพาะชนิดจำนวนเต็ม',
  ),
  'state' => 
  array (
    'required' => 'โปรดเลือกว่าจะแสดงเมนู',
    'integer' => 'เมนูสภาวะข้อผิดพลาดประเภทค่า',
    'max' => 'ข้อผิดพลาดค่าสถานะเมนู',
  ),
  'menu_code' => 
  array (
    'required' => 'ตัวระบุเมนูต้องไม่ว่างเปล่า',
  ),
  'agent_id' => 
  array (
    'required' => 'ID ไม่สามารถเป็นห้องโถงใหญ่ที่ว่างเปล่า',
    'integer' => 'เพียงหลักห้องโถง ID ประเภทจำนวน',
  ),
  'grade_id' => 
  array (
    'required' => 'หลักประเภทห้องโถง ID ต้องไม่ว่างเปล่า',
    'integer' => 'เพียงหลักประเภทห้องโถงประเภทหมายเลขรหัส',
  ),
  'menus' => 
  array (
    'required' => 'เมนูที่ได้รับมอบหมายต้องไม่ว่างเปล่า',
  ),
);