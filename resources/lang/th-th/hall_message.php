<?php
return array (
  'message' => 
  array (
    'required' => 'เนื้อหาต้องไม่ว่างเปล่า',
  ),
  'start_date' => 
  array (
    'required' => 'เวลาเริ่มต้นต้องไม่ว่างเปล่า',
    'date_format' => 'เวลาเริ่มต้นมีรูปแบบไม่ถูกต้อง',
    'after' => 'เวลาเริ่มต้นมากกว่าเวลาปัจจุบัน',
  ),
  'end_date' => 
  array (
    'required' => 'เวลาสิ้นสุดต้องไม่ว่างเปล่า',
    'date_format' => 'เวลาสิ้นสุดอยู่ในรูปแบบที่ไม่ถูกต้อง',
    'after' => 'เวลาสิ้นสุดมากกว่าเวลาเริ่มต้น',
  ),
  'data_not_exist' => 'ไม่มีข้อมูล',
);