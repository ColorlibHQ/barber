/**
 * Newsletter form of the (unloaded) theme copy of the Elementor widgets:
 * Mailchimp subscribe over AjaxChimp, without jQuery.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  //  Mailchimp ajax
  UI.ajaxChimp('#mc_embed_signup form');
}());
