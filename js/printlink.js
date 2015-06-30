/* Copyright 2015 Zachary Doll */
jQuery(document).ready(function ($) {
    $('.Discussion .Options .Bookmark').after('<a href="#print" class="printLink">Print</a>');
    $('.Discussion .Options .printLink').click(function () {
        window.print();
        return false;
    });
});