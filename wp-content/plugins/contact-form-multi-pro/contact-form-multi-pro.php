<?php
/*
Plugin Name: Contact Form Multi Pro
Plugin URI: http://bestwebsoft.com/products/
Description: This plugin is an exclusive add-on to the Contact Form plugin by BestWebSoft.
Author: BestWebSoft
Version: 1.0.7
Author URI: http://bestwebsoft.com/
License: Proprietary
*/
eval( base64_decode(
'aWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyggJ2NudGN0ZnJtbWx0cHJfYWRtaW5fbWVudScgKSApIHsgZnVuY3Rpb24gY250Y3Rmcm1tbHRwcl9hZG1pbl9tZW51KCkgewogZ2xvYmFsICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucywgJGJzdHdic2Z0d3BwZHRwbGduc19hZGRlZF9tZW51OyAkYndzX21lbnVfaW5mbyA9IGdldF9wbHVnaW5fZGF0YSggcGx1Z2luX2Rpcl9wYXRoKCBfX0ZJTEVfXyApIC4gImJ3c19tZW51L2J3c19tZW51LnBocCIgKTsKJGJ3c19tZW51X3ZlcnNpb24gPSAkYndzX21lbnVfaW5mb1siVmVyc2lvbiJdOyAkYmFzZSA9ICdjb250YWN0LWZvcm0tbXVsdGktcHJvL2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8ucGhwJzsKaWYgKCAhIGlzc2V0KCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMgKSApIHsgaWYgKCBpc19tdWx0aXNpdGUoKSApIHsgaWYgKCAhIGdldF9zaXRlX29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJyApICkKIGFkZF9zaXRlX29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJywgYXJyYXkoKSApOyAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMgPSBnZXRfc2l0ZV9vcHRpb24oICdic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucycgKTsKfSBlbHNlIHsgaWYgKCAhIGdldF9vcHRpb24oICdic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucycgKSApIGFkZF9vcHRpb24oICdic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucycsIGFycmF5KCkgKTsKJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zID0gZ2V0X29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJyApOyB9IH0gaWYgKCBpc3NldCggJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zWydid3NfbWVudV92ZXJzaW9uJ10gKSApIHsKICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1snYndzX21lbnUnXVsndmVyc2lvbiddWyAkYmFzZSBdID0gJGJ3c19tZW51X3ZlcnNpb247IHVuc2V0KCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnNbJ2J3c19tZW51X3ZlcnNpb24nXSApOwppZiAoIGlzX211bHRpc2l0ZSgpICkgdXBkYXRlX3NpdGVfb3B0aW9uKCAnYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMnLCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMgKTsKZWxzZSB1cGRhdGVfb3B0aW9uKCAnYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMnLCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMgKTsgcmVxdWlyZV9vbmNlKCBkaXJuYW1lKCBfX0ZJTEVfXyApIC4gJy9id3NfbWVudS9id3NfbWVudS5waHAnICk7Cn0gZWxzZSBpZiAoICEgaXNzZXQoICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1snYndzX21lbnUnXVsndmVyc2lvbiddWyAkYmFzZSBdICkgfHwgJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zWydid3NfbWVudSddWyd2ZXJzaW9uJ11bICRiYXNlIF0gPCAkYndzX21lbnVfdmVyc2lvbiApIHsKICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1snYndzX21lbnUnXVsndmVyc2lvbiddWyAkYmFzZSBdID0gJGJ3c19tZW51X3ZlcnNpb247IGlmICggaXNfbXVsdGlzaXRlKCkgKQogdXBkYXRlX3NpdGVfb3B0aW9uKCAnYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMnLCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMgKTsgZWxzZSB1cGRhdGVfb3B0aW9uKCAnYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMnLCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMgKTsKcmVxdWlyZV9vbmNlKCBkaXJuYW1lKCBfX0ZJTEVfXyApIC4gJy9id3NfbWVudS9id3NfbWVudS5waHAnICk7IH0gZWxzZSBpZiAoICEgaXNzZXQoICRic3R3YnNmdHdwcGR0cGxnbnNfYWRkZWRfbWVudSApICkgewogJHBsdWdpbl93aXRoX25ld2VyX21lbnUgPSAkYmFzZTsgZm9yZWFjaCAoICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1snYndzX21lbnUnXVsndmVyc2lvbiddIGFzICRrZXkgPT4gJHZhbHVlICkgewogaWYgKCAkYndzX21lbnVfdmVyc2lvbiA8ICR2YWx1ZSAmJiBpc19wbHVnaW5fYWN0aXZlKCAkYmFzZSApICkgeyAkcGx1Z2luX3dpdGhfbmV3ZXJfbWVudSA9ICRrZXk7IH0KfSAkcGx1Z2luX3dpdGhfbmV3ZXJfbWVudSA9IGV4cGxvZGUoICcvJywgJHBsdWdpbl93aXRoX25ld2VyX21lbnUgKTsgJHdwX2NvbnRlbnRfZGlyID0gZGVmaW5lZCggJ1dQX0NPTlRFTlRfRElSJyApID8gYmFzZW5hbWUoIFdQX0NPTlRFTlRfRElSICkgOiAnd3AtY29udGVudCc7CmlmICggZmlsZV9leGlzdHMoIEFCU1BBVEggLiAkd3BfY29udGVudF9kaXIgLiAnL3BsdWdpbnMvJyAuICRwbHVnaW5fd2l0aF9uZXdlcl9tZW51WzBdIC4gJy9id3NfbWVudS9id3NfbWVudS5waHAnICkgKQogcmVxdWlyZV9vbmNlKCBBQlNQQVRIIC4gJHdwX2NvbnRlbnRfZGlyIC4gJy9wbHVnaW5zLycgLiAkcGx1Z2luX3dpdGhfbmV3ZXJfbWVudVswXSAuICcvYndzX21lbnUvYndzX21lbnUucGhwJyApOwplbHNlIHJlcXVpcmVfb25jZSggZGlybmFtZSggX19GSUxFX18gKSAuICcvYndzX21lbnUvYndzX21lbnUucGhwJyApOyAkYnN0d2JzZnR3cHBkdHBsZ25zX2FkZGVkX21lbnUgPSB0cnVlOyAKIH0gYWRkX21lbnVfcGFnZSggJ0JXUyBQbHVnaW5zJywgJ0JXUyBQbHVnaW5zJywgJ21hbmFnZV9vcHRpb25zJywgJ2J3c19wbHVnaW5zJywgJ2J3c19hZGRfbWVudV9yZW5kZXInLCBwbHVnaW5zX3VybCggImltYWdlcy9weC5wbmciLCBfX0ZJTEVfXyApLCAxMDAxICk7IAogfSB9IGlmICggISBmdW5jdGlvbl9leGlzdHMoICdjbnRjdGZybW1sdHByX2luaXQnICkgKSB7IGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfaW5pdCgpIHsgZ2xvYmFsICRjbnRjdGZybW1sdHByX3BsdWdpbl9pbmZvOwogbG9hZF9wbHVnaW5fdGV4dGRvbWFpbiggJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nLCBmYWxzZSwgZGlybmFtZSggcGx1Z2luX2Jhc2VuYW1lKCBfX0ZJTEVfXyApICkgLiAnL2xhbmd1YWdlcy8nICk7IAogY250Y3Rmcm1tbHRwcl92ZXJzaW9uX2NoZWNrKCk7IH0gfSBpZiAoICEgZnVuY3Rpb25fZXhpc3RzKCAnY250Y3Rmcm1tbHRwcl9hZG1pbl9pbml0JyApICkgeyBmdW5jdGlvbiBjbnRjdGZybW1sdHByX2FkbWluX2luaXQoKSB7CiBnbG9iYWwgJGJ3c19wbHVnaW5faW5mbywgJGNudGN0ZnJtbWx0cHJfcGx1Z2luX2luZm87IGlmICggISAkY250Y3Rmcm1tbHRwcl9wbHVnaW5faW5mbyApICRjbnRjdGZybW1sdHByX3BsdWdpbl9pbmZvID0gZ2V0X3BsdWdpbl9kYXRhKCBkaXJuYW1lKCBfX0ZJTEVfXyApIC4gJy9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCcgKTsKIGlmICggISBpc3NldCggJGJ3c19wbHVnaW5faW5mbyApIHx8IGVtcHR5KCAkYndzX3BsdWdpbl9pbmZvICkgKSAkYndzX3BsdWdpbl9pbmZvID0gYXJyYXkoICdpZCcgPT4gJzEyOScsICd2ZXJzaW9uJyA9PiAkY250Y3Rmcm1tbHRwcl9wbHVnaW5faW5mb1siVmVyc2lvbiJdICk7IAogY250Y3Rmcm1tbHRwcl9jaGVjaygpOyBpZiAoIGlzc2V0KCAkX1JFUVVFU1RbJ3BhZ2UnXSApICYmICggJF9SRVFVRVNUWydwYWdlJ10gPT0gJ2NvbnRhY3RfZm9ybS5waHAnIHx8ICRfUkVRVUVTVFsncGFnZSddID09ICdjb250YWN0X2Zvcm1fcHJvLnBocCcgfHwgJF9SRVFVRVNUWydwYWdlJ10gPT0gJ2NvbnRhY3RfZm9ybV9wcm9fZXh0cmEucGhwJyApICkgewogY250Y3Rmcm1tbHRwcl9zZXR0aW5nc19kZWZhdWx0cygpOyBjbnRjdGZybW1sdHByX21haW5fb3B0aW9ucygpOyB9IH0gfSBpZiAoICEgZnVuY3Rpb25fZXhpc3RzKCAnY250Y3Rmcm1tbHRwcl9zZXR0aW5nc19kZWZhdWx0cycgKSApIHsKIGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfc2V0dGluZ3NfZGVmYXVsdHMoKSB7IGdsb2JhbCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zLCAkY250Y3Rmcm1tbHRwcl9wbHVnaW5faW5mbywgJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluOwogJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluID0gYXJyYXkoICdwbHVnaW5fb3B0aW9uX3ZlcnNpb24nID0+ICRjbnRjdGZybW1sdHByX3BsdWdpbl9pbmZvWyJWZXJzaW9uIl0sCiAnbmFtZV9pZF9mb3JtJyA9PiBhcnJheSggMSA9PiAnTkVXX0ZPUk0nICksICduZXh0X2lkX2Zvcm0nID0+IDIsICdpZF9mb3JtJyA9PiAxICk7IGlmICggISBnZXRfb3B0aW9uKCAnY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4nICkgKSB7CiBpZiAoIGdldF9vcHRpb24oICdjbnRjdGZybW1sdF9vcHRpb25zX21haW4nICkgKSB7ICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbiA9IGFycmF5X21lcmdlKCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4sIGdldF9vcHRpb24oICdjbnRjdGZybW1sdF9vcHRpb25zX21haW4nICkgKTsgCiB9IGFkZF9vcHRpb24oICdjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbicsICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbiwgJycsICd5ZXMnICk7IH0gJGNudGN0ZnJtbWx0cHJfb3B0aW9ucyA9IGdldF9vcHRpb24oICdjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbicgKTsKaWYgKCAhIGlzc2V0KCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zWydwbHVnaW5fb3B0aW9uX3ZlcnNpb24nXSApIHx8ICRjbnRjdGZybW1sdHByX29wdGlvbnNbJ3BsdWdpbl9vcHRpb25fdmVyc2lvbiddICE9ICRjbnRjdGZybW1sdHByX3BsdWdpbl9pbmZvWyJWZXJzaW9uIl0gKSB7CiAkY250Y3Rmcm1tbHRwcl9vcHRpb25zID0gYXJyYXlfbWVyZ2UoICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbiwgJGNudGN0ZnJtbWx0cHJfb3B0aW9ucyApOyAkY250Y3Rmcm1tbHRwcl9vcHRpb25zWydwbHVnaW5fb3B0aW9uX3ZlcnNpb24nXSA9ICRjbnRjdGZybW1sdHByX3BsdWdpbl9pbmZvWyJWZXJzaW9uIl07CnVwZGF0ZV9vcHRpb24oICdjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbicsICRjbnRjdGZybW1sdHByX29wdGlvbnMgKTsgfSB9IH0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyggJ2NudGN0ZnJtbWx0cHJfbWFpbl9vcHRpb25zJyApICkgewogZnVuY3Rpb24gY250Y3Rmcm1tbHRwcl9tYWluX29wdGlvbnMoKSB7IGdsb2JhbCAkY250Y3Rmcm1tbHRwcl9jb3VudHMsICRjbnRjdGZybW1sdHByX2lkX2Zvcm0sICRrZXksICRjbnRjdGZybW1sdHByX2tleXMsICRjbnRjdGZybW1sdHByX2xhc3Rfa2V5LCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4sICR2YWx1ZTsKJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluID0gZ2V0X29wdGlvbiggJ2NudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluJyApOyBpZiAoICEgaXNzZXQoICRfR0VUWydpZCddICkgKSAKICRfU0VTU0lPTlsnY250Y3Rmcm1tbHRfaWRfZm9ybSddID0gJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluWydpZF9mb3JtJ107IGlmICggaXNzZXQoICRfR0VUWydpZCddICkgKQogJF9TRVNTSU9OWydjbnRjdGZybW1sdF9pZF9mb3JtJ10gPSAkX0dFVFsnaWQnXTsgJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluWydpZF9mb3JtJ10gPSAkX1NFU1NJT05bJ2NudGN0ZnJtbWx0X2lkX2Zvcm0nXTsKdXBkYXRlX29wdGlvbiggJ2NudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluJywgJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluLCAnJywgJ3llcycgKTsgaWYgKCBpc3NldCggJF9HRVRbJ2RlbCddICkgKSB7CiAkY250Y3Rmcm1tbHRwcl9hcmdzID0gJ2NudGN0ZnJtbWx0X29wdGlvbnNfJy4gJF9HRVRbJ2lkJ107IGRlbGV0ZV9vcHRpb24oICRjbnRjdGZybW1sdHByX2FyZ3MgKTsgZ2xvYmFsICR3cGRiOwokc3FsID0gIkRST1AgVEFCTEUgSUYgRVhJU1RTIGAiIC4gJHdwZGItPnByZWZpeCAuICdjbnRjdGZybV9sb2NhdGlvbicgLiAkX0dFVFsnaWQnXSAuICJgOyI7ICR3cGRiLT5xdWVyeSggJHNxbCApOwogJGNudGN0ZnJtbWx0cHJfY291bnRzID0gJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluWyduYW1lX2lkX2Zvcm0nXTsgdW5zZXQoICRjbnRjdGZybW1sdHByX2NvdW50c1skY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW5bJ2lkX2Zvcm0nXV0gKTsKJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluWyduYW1lX2lkX2Zvcm0nXSA9ICRjbnRjdGZybW1sdHByX2NvdW50czsgJGNudGN0ZnJtbWx0cHJfa2V5cyA9IGFycmF5X2tleXMoICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnbmFtZV9pZF9mb3JtJ10gKTsKJGNudGN0ZnJtbWx0cHJfbGFzdF9rZXkgPSBlbmQoICRjbnRjdGZybW1sdHByX2tleXMgKTsgJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluWydpZF9mb3JtJ10gPSAkY250Y3Rmcm1tbHRwcl9sYXN0X2tleTsKdXBkYXRlX29wdGlvbiggJ2NudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluJywgJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluLCAnJywgJ3llcycgKTsgJF9TRVNTSU9OWydjbnRjdGZybW1sdF9pZF9mb3JtJ10gPSAkY250Y3Rmcm1tbHRwcl9sYXN0X2tleTsKaWYgKCBlbXB0eSggJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluWyduYW1lX2lkX2Zvcm0nXSApICkgeyAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW5bJ2lkX2Zvcm0nXSA9IDE7CiRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnbmFtZV9pZF9mb3JtJ10gPSBhcnJheSggMSA9PiAnTkVXX0ZPUk0nICk7ICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnbmV4dF9pZF9mb3JtJ10gPSAyOwp1cGRhdGVfb3B0aW9uKCAnY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4nLCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4sICcnLCAneWVzJyApOyAkX1NFU1NJT05bJ2NudGN0ZnJtbWx0X2lkX2Zvcm0nXSA9IDE7Cn0gfSB9IH0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyAoICdjbnRjdGZybW1sdHByX3ZlcnNpb25fY2hlY2snICkgKSB7IGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfdmVyc2lvbl9jaGVjaygpIHsKIGdsb2JhbCAkd3BfdmVyc2lvbiwgJGNudGN0ZnJtbWx0cHJfcGx1Z2luX2luZm87ICRyZXF1aXJlX3dwID0gIjMuMSI7ICRwbHVnaW4gPSAnY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCc7CmlmICggdmVyc2lvbl9jb21wYXJlKCAkd3BfdmVyc2lvbiwgJHJlcXVpcmVfd3AsICI8IiApICkgeyBpbmNsdWRlX29uY2UoIEFCU1BBVEggLiAnd3AtYWRtaW4vaW5jbHVkZXMvcGx1Z2luLnBocCcgKTsKaWYgKCBpc19wbHVnaW5fYWN0aXZlKCAkcGx1Z2luICkgKSB7IGRlYWN0aXZhdGVfcGx1Z2lucyggJHBsdWdpbiApOyAkYWRtaW5fdXJsID0gKCBmdW5jdGlvbl9leGlzdHMoICdnZXRfYWRtaW5fdXJsJyApICkgPyBnZXRfYWRtaW5fdXJsKCBudWxsLCAncGx1Z2lucy5waHAnICkgOiBlc2NfdXJsKCAnL3dwLWFkbWluL3BsdWdpbnMucGhwJyApOwppZiAoICEgJGNudGN0ZnJtbWx0cHJfcGx1Z2luX2luZm8gKSAkY250Y3Rmcm1tbHRwcl9wbHVnaW5faW5mbyA9IGdldF9wbHVnaW5fZGF0YSggZGlybmFtZSggX19GSUxFX18gKSAuICcvY29udGFjdC1mb3JtLW11bHRpLXByby5waHAnICk7CndwX2RpZSggIjxzdHJvbmc+IiAuICRjbnRjdGZybW1sdHByX3BsdWdpbl9pbmZvWydOYW1lJ10gLiAiIDwvc3Ryb25nPiAiIC4gX18oICdyZXF1aXJlcycsICdjb250YWN0LWZvcm0tbXVsdGktcHJvJyApIC4gIiA8c3Ryb25nPldvcmRQcmVzcyAiIC4gJHJlcXVpcmVfd3AgLiAiPC9zdHJvbmc+ICIgLiBfXyggJ29yIGhpZ2hlciwgdGhhdCBpcyB3aHkgaXQgaGFzIGJlZW4gZGVhY3RpdmF0ZWQhIFBsZWFzZSB1cGdyYWRlIFdvcmRQcmVzcyBhbmQgdHJ5IGFnYWluLicsICdjb250YWN0LWZvcm0tbXVsdGktcHJvJykgLiAiPGJyIC8+PGJyIC8+IiAuIF9fKCAnQmFjayB0byB0aGUgV29yZFByZXNzJywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nKSAuICIgPGEgaHJlZj0nIiAuICRhZG1pbl91cmwgLiAiJz4iIC4gX18oICdQbHVnaW5zIHBhZ2UnLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycpIC4gIjwvYT4uIiApOwp9IH0gfSB9IGlmICggISBmdW5jdGlvbl9leGlzdHMgKCAnY250Y3Rmcm1tbHRwcl9wbHVnaW5fbGlua3MnICkgKSB7IGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfcGx1Z2luX2xpbmtzKCAkbGlua3MsICRmaWxlICkgewogJGJhc2UgPSAnY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCc7IGlmICggJGZpbGUgPT0gJGJhc2UgKSB7ICRsaW5rc1tdID0gJzxhIGhyZWY9Imh0dHA6Ly9iZXN0d2Vic29mdC5jb20vcHJvZHVjdHMvY29udGFjdC1mb3JtLW11bHRpL2ZhcS8iIHRhcmdldD0iX2JsYW5rIj4nIC4gX18oICdGQVEnLCdjb250YWN0LWZvcm0tbXVsdGktcHJvJyApIC4gJzwvYT4nOwokbGlua3NbXSA9ICc8YSBocmVmPSJodHRwOi8vc3VwcG9ydC5iZXN0d2Vic29mdC5jb20iPicgLiBfXyggJ1N1cHBvcnQnLCdjb250YWN0LWZvcm0tbXVsdGktcHJvJyApIC4gJzwvYT4nOwp9IHJldHVybiAkbGlua3M7IH0gfSBpZiAoICEgZnVuY3Rpb25fZXhpc3RzICggJ2NudGN0ZnJtbWx0cHJfYWN0aW9uX2NhbGxiYWNrJyApICkgeyBmdW5jdGlvbiBjbnRjdGZybW1sdHByX2FjdGlvbl9jYWxsYmFjaygpIHsKIGdsb2JhbCAkY250Y3Rmcm1tbHRwcl9jb3VudHMsICRjbnRjdGZybW1sdHByX2osICRjbnRjdGZybW1sdHByX2tleV9mb3JtLCAkY250Y3Rmcm1tbHRwcl92YWx1ZSwgJGNudGN0ZnJtbWx0cHJfaWRfa2V5LCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW47CmNoZWNrX2FqYXhfcmVmZXJlciggcGx1Z2luX2Jhc2VuYW1lKCBfX0ZJTEVfXyApLCAnY250Y3Rmcm1tbHRwcl9hamF4X25vbmNlX2ZpZWxkJyApOyAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4gPSBnZXRfb3B0aW9uKCAnY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4nICk7CiBpZiAoIGlzc2V0KCAkX1BPU1RbJ2NudGN0ZnJtbWx0cHJfa2V5X2Zvcm0nXSApICkgeyAkY250Y3Rmcm1tbHRwcl9pZF9rZXkgPSAkX1BPU1RbJ2NudGN0ZnJtbWx0cHJfa2V5X2Zvcm0nXTsKJGNudGN0ZnJtbWx0cHJfaWRfa2V5ICs9IDE7ICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnbmV4dF9pZF9mb3JtJ10gPSAkY250Y3Rmcm1tbHRwcl9pZF9rZXk7ICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnaWRfZm9ybSddID0gJF9QT1NUWydjbnRjdGZybW1sdHByX2tleV9mb3JtJ107CiRfU0VTU0lPTlsnY250Y3Rmcm1tbHRfaWRfZm9ybSddID0gJF9QT1NUWydjbnRjdGZybW1sdHByX2tleV9mb3JtJ107IH0gaWYgKCBpc3NldCggJF9QT1NUWydjbnRjdGZybW1sdHByX25hbWVfZm9ybSddICkgKSB7CiBmb3JlYWNoKCAkX1BPU1RbJ2NudGN0ZnJtbWx0cHJfbmFtZV9mb3JtJ10gYXMgJGNudGN0ZnJtbWx0cHJfaiApeyBsaXN0KCAka2V5LCAkY250Y3Rmcm1tbHRwcl92YWx1ZSApID0gZXhwbG9kZSggJzonLCAkY250Y3Rmcm1tbHRwcl9qICk7CiRjbnRjdGZybW1sdHByX2NvdW50c1ska2V5XSA9IHN0cmlwX3RhZ3MoIHN0cmlwc2xhc2hlcyggJGNudGN0ZnJtbWx0cHJfdmFsdWUgKSApOyAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW5bJ25hbWVfaWRfZm9ybSddID0gJGNudGN0ZnJtbWx0cHJfY291bnRzOwp9IH0gdXBkYXRlX29wdGlvbiggJ2NudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluJywgJGNudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluLCAnJywgJ3llcycgKTsgZXhpdDsgfSB9CiBpZiAoICEgZnVuY3Rpb25fZXhpc3RzICggJ2NudGN0ZnJtbWx0cHJfc2NyaXB0cycgKSApIHsgZnVuY3Rpb24gY250Y3Rmcm1tbHRwcl9zY3JpcHRzKCkgeyBpZiAoIGlzc2V0KCAkX1JFUVVFU1RbJ3BhZ2UnXSApICYmICggJF9SRVFVRVNUWydwYWdlJ10gPT0gJ2NvbnRhY3RfZm9ybS5waHAnIHx8ICRfUkVRVUVTVFsncGFnZSddID09ICdjb250YWN0X2Zvcm1fcHJvLnBocCcgfHwgJF9SRVFVRVNUWydwYWdlJ10gPT0gJ2NvbnRhY3RfZm9ybV9wcm9fZXh0cmEucGhwJyApICkgewogZ2xvYmFsICR3cF92ZXJzaW9uOyBpZiAoIDMuOCA+ICR3cF92ZXJzaW9uICkgd3BfZW5xdWV1ZV9zdHlsZSggJ2NudGN0ZnJtbWx0cHJfc3R5bGVzaGVldCcsIHBsdWdpbnNfdXJsKCAnY3NzL3N0eWxlX3dwX2JlZm9yZV8zLjguY3NzJywgX19GSUxFX18gKSApOwplbHNlIHdwX2VucXVldWVfc3R5bGUoICdjbnRjdGZybW1sdHByX3N0eWxlc2hlZXQnLCBwbHVnaW5zX3VybCggJ2Nzcy9zdHlsZS5jc3MnLCBfX0ZJTEVfXyApICk7IHdwX2VucXVldWVfc2NyaXB0KCAnY250Y3Rmcm1tbHRwcl9zY3JpcHQnLCBwbHVnaW5zX3VybCggJ2pzL3NjcmlwdC5qcycsIF9fRklMRV9fICkgKTsKICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbiA9IGdldF9vcHRpb24oICdjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbicgKTsgJHNpdGVfdXJsX2lmX211bHRpc2l0ZSA9IGlzX211bHRpc2l0ZSgpID8gc2l0ZV91cmwoKSA6ICcnOwogJGNudGN0ZnJtbWx0cHJfY291bnQgPSBhcnJheSgpOyBpZiAoICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbiApIHsgZm9yZWFjaCAoICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnbmFtZV9pZF9mb3JtJ10gYXMgJGtleSA9PiAkdmFsdWUgKSB7CiAkY250Y3Rmcm1tbHRwcl9jb3VudFsgJGtleSBdID0gJHZhbHVlOyB9IH0gJHNjcmlwdF92YXJzID0gYXJyYXkoICdjbnRjdGZybW1sdHByX25vbmNlJyA9PiB3cF9jcmVhdGVfbm9uY2UoIHBsdWdpbl9iYXNlbmFtZSggX19GSUxFX18gKSwgJ2NudGN0ZnJtbWx0cHJfYWpheF9ub25jZV9maWVsZCcgKSwKICdjbnRjdGZybW1sdHByX2RlbGV0ZV9tZXNzYWdlJyA9PiBfXyggJ0FyZSB5b3Ugc3VyZSB5b3Ugd2FudCB0byBkZWxldGUgdGhlIGZvcm0/JywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICksCiAnY250Y3Rmcm1tbHRwcl9pZF9mb3JtJyA9PiAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW5bJ2lkX2Zvcm0nXSwgJ2NudGN0ZnJtbWx0cHJfbG9jYXRpb24nID0+ICRzaXRlX3VybF9pZl9tdWx0aXNpdGUgLiAkX1NFUlZFUlsnUEhQX1NFTEYnXSAuICc/cGFnZT0nIC4gJF9SRVFVRVNUWydwYWdlJ10sCiAnY250Y3Rmcm1tbHRwcl9hY3Rpb25fc2x1ZycgPT4gKCBpc3NldCggJF9HRVRbJ2FjdGlvbiddICkgPyAnJmFjdGlvbj0nIC4gJF9HRVRbJ2FjdGlvbiddIDogJycgKSwgJ2NudGN0ZnJtbWx0cHJfa2V5X2lkJyA9PiAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW5bJ25leHRfaWRfZm9ybSddLAogJ2NudGN0ZnJtbWx0cHJfY291bnQnID0+ICRjbnRjdGZybW1sdHByX2NvdW50LCApOyB3cF9sb2NhbGl6ZV9zY3JpcHQoICdjbnRjdGZybW1sdHByX3NjcmlwdCcsICdjbnRjdGZybW1sdHByX3NjcmlwdF92YXJzJywgJHNjcmlwdF92YXJzICk7Cn0gfSB9IGlmICggISBmdW5jdGlvbl9leGlzdHMoICdjbnRjdGZybW1sdHByX3NjcmlwdF92YXInICkgKSB7IGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfc2NyaXB0X3ZhcigpIHsgCiBpZiAoIGluX2FycmF5KCAkX1NFUlZFUlsnUEhQX1NFTEYnXSwgYXJyYXkoICcvd3AtYWRtaW4vcGx1Z2lucy5waHAnLCAnL3dwLWFkbWluL25ldHdvcmsvcGx1Z2lucy5waHAnLCAnL3dwLWFkbWluL3VwZGF0ZS1jb3JlLnBocCcsICcvd3AtYWRtaW4vbmV0d29yay91cGRhdGUtY29yZS5waHAnICkgKSApIHsgPz4gCiA8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+IChmdW5jdGlvbigkKXsgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXsgaWYgKCAkKCJhW3RpdGxlPSdDb250YWN0IEZvcm0gTXVsdGkgUHJvJ10iKS5sZW5ndGggKSB7CiB2YXIgbGluayA9ICQoImFbdGl0bGU9J0NvbnRhY3QgRm9ybSBNdWx0aSBQcm8nXSIpOyA8P3BocCBpZiAoIGluX2FycmF5KCAkX1NFUlZFUlsnUEhQX1NFTEYnXSwgYXJyYXkoICcvd3AtYWRtaW4vcGx1Z2lucy5waHAnLCAnL3dwLWFkbWluL25ldHdvcmsvcGx1Z2lucy5waHAnICkgKSApIHsgPz4KIGxpbmsucGFyZW50KCkuaHRtbCggbGluay5wYXJlbnQoKS5odG1sKCkucmVwbGFjZSggLyBvciAvaWcsICIiICkgKTsgPD9waHAgfSBlbHNlIHsgPz4gbGluay5wYXJlbnQoKS5odG1sKCBsaW5rLnBhcmVudCgpLmh0bWwoKS5yZXBsYWNlKCAvPFwvYT4uPGJyPi9pZywgIjwvYT48YnI+IiApICk7Cjw/cGhwIH0gPz4gJCgiYVt0aXRsZT0nQ29udGFjdCBGb3JtIE11bHRpIFBybyddIikucmVtb3ZlKCk7IH07IH0pOyB9KShqUXVlcnkpOyA8L3NjcmlwdD4gPD9waHAgfQp9IH0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyggJ2NudGN0ZnJtbWx0cHJfY2hlY2snICkgKSB7IGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfY2hlY2soKSB7IGdsb2JhbCAkY250Y3Rmcm1tbHRwcl9jb250YWN0X2Zvcm1fbm90X2ZvdW5kLCAkY250Y3Rmcm1tbHRwcl9jb250YWN0X2Zvcm1fbm90X2FjdGl2ZTsKaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyggJ2dldF9wbHVnaW5zJyApICkgcmVxdWlyZV9vbmNlKCBBQlNQQVRIIC4gJy93cC1hZG1pbi9pbmNsdWRlcy9wbHVnaW4ucGhwJyApOwogJGFsbF9wbHVnaW5zID0gZ2V0X3BsdWdpbnMoKTsgaWYgKCAhICggYXJyYXlfa2V5X2V4aXN0cyggJ2NvbnRhY3QtZm9ybS1wbHVnaW4vY29udGFjdF9mb3JtLnBocCcsICRhbGxfcGx1Z2lucyApIHx8IGFycmF5X2tleV9leGlzdHMoICdjb250YWN0LWZvcm0tcHJvL2NvbnRhY3RfZm9ybV9wcm8ucGhwJywgJGFsbF9wbHVnaW5zICkgKSApIHsKICRjbnRjdGZybW1sdHByX2NvbnRhY3RfZm9ybV9ub3RfZm91bmQgPSBfXyggJ0NvbnRhY3QgRm9ybSBQbHVnaW4gaGFzIG5vdCBiZWVuIGZvdW5kLjwvYnI+WW91IHNob3VsZCBpbnN0YWxsIGFuZCBhY3RpdmF0ZSB0aGlzIHBsdWdpbiBmb3IgdGhlIGNvcnJlY3Qgd29yayB3aXRoIENvbnRhY3QgRm9ybSBNdWx0aSBQcm8gcGx1Z2luLjwvYnI+WW91IGNhbiBkb3dubG9hZCBDb250YWN0IEZvcm0gUGx1Z2luIGZyb20nLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycgKSAuICcgPGEgaHJlZj0iJyAuIGVzY191cmwoICdodHRwOi8vYmVzdHdlYnNvZnQuY29tL3Byb2R1Y3RzL2NvbnRhY3QtZm9ybS8nICkgLiAnIiB0aXRsZT0iJyAuIF9fKCAnRGV2ZWxvcGVycyB3ZWJzaXRlJywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICkuICcidGFyZ2V0PSJfYmxhbmsiPicgLiBfXyggJ3dlYnNpdGUgb2YgcGx1Z2luIEF1dGhvcnMnLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycgKSAuICc8L2E+ICcgLiBfXyggJ29yJywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICkgLiAnIDxhIGhyZWY9IicgLiBlc2NfdXJsKCAnaHR0cDovL3dvcmRwcmVzcy5vcmcnICkgLiciIHRpdGxlPSJXb3JkcHJlc3MiIHRhcmdldD0iX2JsYW5rIj4nLiBfXyggJ1dvcmRwcmVzcy4nLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycgKSAuICc8L2E+JzsKfSBlbHNlIHsgaWYgKCAhICggaXNfcGx1Z2luX2FjdGl2ZSggJ2NvbnRhY3QtZm9ybS1wbHVnaW4vY29udGFjdF9mb3JtLnBocCcgKSB8fCBpc19wbHVnaW5fYWN0aXZlKCAnY29udGFjdC1mb3JtLXByby9jb250YWN0X2Zvcm1fcHJvLnBocCcgKSApICkgewogJGNudGN0ZnJtbWx0cHJfY29udGFjdF9mb3JtX25vdF9hY3RpdmUgPSBfXyggJ0NvbnRhY3QgRm9ybSBQbHVnaW4gaXMgbm90IGFjdGl2ZS48L2JyPllvdSBzaG91bGQgYWN0aXZhdGUgdGhpcyBwbHVnaW4gZm9yIHRoZSBjb3JyZWN0IHdvcmsgd2l0aCBDb250YWN0IEZvcm0gTXVsdGkgUHJvIHBsdWdpbi4nLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycgKTsKfSBpZiAoICggaXNfcGx1Z2luX2FjdGl2ZSggJ2NvbnRhY3QtZm9ybS1wbHVnaW4vY29udGFjdF9mb3JtLnBocCcgKSAmJiBpc3NldCggJGFsbF9wbHVnaW5zWydjb250YWN0LWZvcm0tcGx1Z2luL2NvbnRhY3RfZm9ybS5waHAnXVsnVmVyc2lvbiddICkgJiYgJGFsbF9wbHVnaW5zWydjb250YWN0LWZvcm0tcGx1Z2luL2NvbnRhY3RfZm9ybS5waHAnXVsnVmVyc2lvbiddIDwgJzMuNzcnICkgfHwgCiAoIGlzX3BsdWdpbl9hY3RpdmUoICdjb250YWN0LWZvcm0tcHJvL2NvbnRhY3RfZm9ybV9wcm8ucGhwJyApICYmIGlzc2V0KCAkYWxsX3BsdWdpbnNbJ2NvbnRhY3QtZm9ybS1wcm8vY29udGFjdF9mb3JtX3Byby5waHAnXVsnVmVyc2lvbiddICkgJiYgJGFsbF9wbHVnaW5zWydjb250YWN0LWZvcm0tcHJvL2NvbnRhY3RfZm9ybV9wcm8ucGhwJ11bJ1ZlcnNpb24nXSA8ICcxLjI1JyApICkgewogJGNudGN0ZnJtbWx0cHJfY29udGFjdF9mb3JtX25vdF9mb3VuZCA9IF9fKCAnQ29udGFjdCBGb3JtIFBsdWdpbiBoYXMgb2xkIHZlcnNpb24uPC9icj5Zb3UgbmVlZCB1cGRhdGUgdGhpcyBwbHVnaW4gZm9yIGNvcnJlY3Qgd29yayB3aXRoIENvbnRhY3QgRm9ybSBNdWx0aSBQcm8gcGx1Z2luLicsICdjb250YWN0LWZvcm0tbXVsdGktcHJvJyApOwp9IH0gfSB9IGlmICggISBmdW5jdGlvbl9leGlzdHMoICdjbnRjdGZybW1sdHByX3Nob3dfbm90aWNlcycgKSApIHsgZnVuY3Rpb24gY250Y3Rmcm1tbHRwcl9zaG93X25vdGljZXMoKSB7IAogZ2xvYmFsICRob29rX3N1ZmZpeCwgJGNudGN0ZnJtbWx0cHJfY29udGFjdF9mb3JtX25vdF9mb3VuZCwgJGNudGN0ZnJtbWx0cHJfY29udGFjdF9mb3JtX25vdF9hY3RpdmU7CmlmICggJGhvb2tfc3VmZml4ID09ICdwbHVnaW5zLnBocCcgfHwgKCBpc3NldCggJF9SRVFVRVNUWydwYWdlJ10gKSAmJiAkX1JFUVVFU1RbJ3BhZ2UnXSA9PSAnYndzX3BsdWdpbnMnICkgfHwgKCBpc3NldCggJF9SRVFVRVNUWydwYWdlJ10gKSAmJiAoICRfUkVRVUVTVFsncGFnZSddID09ICdjb250YWN0X2Zvcm0ucGhwJyB8fCAkX1JFUVVFU1RbJ3BhZ2UnXSA9PSAnY29udGFjdF9mb3JtX3Byby5waHAnICkgKSApIHsKIGlmICggJycgIT0gJGNudGN0ZnJtbWx0cHJfY29udGFjdF9mb3JtX25vdF9mb3VuZCB8fCAnJyAhPSAkY250Y3Rmcm1tbHRwcl9jb250YWN0X2Zvcm1fbm90X2FjdGl2ZSApIHsgPz4KIDxkaXYgY2xhc3M9ImVycm9yIj4gPHA+PHN0cm9uZz48P3BocCBfZSggJ1dBUk5JTkc6JywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICk7ID8+PC9zdHJvbmc+IDw/cGhwIGVjaG8gJGNudGN0ZnJtbWx0cHJfY29udGFjdF9mb3JtX25vdF9mb3VuZCAuICRjbnRjdGZybW1sdHByX2NvbnRhY3RfZm9ybV9ub3RfYWN0aXZlOyA/PjwvcD4KIDwvZGl2PiA8P3BocCB9ID8+IDxub3NjcmlwdD4gPGRpdiBjbGFzcz0iZXJyb3IiPiA8cD48P3BocCBfZSggJ1BsZWFzZSBlbmFibGUgSmF2YVNjcmlwdCBpbiB5b3VyIGJyb3dzZXIhJywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nKTsgPz48L3A+CiA8L2Rpdj4gPC9ub3NjcmlwdD4gPD9waHAgfSBpZiAoICRob29rX3N1ZmZpeCA9PSAncGx1Z2lucy5waHAnICkgeyBnbG9iYWwgJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zLCAkYnN0d2JzZnR3cHBkdHBsZ25zX2Nvb2tpZV9hZGQ7CmlmICggaXNzZXQoICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1sndGltZV9vdXQnXVsnY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCddICkgJiYgc3RydG90aW1lKCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnNbJ3RpbWVfb3V0J11bJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8vY29udGFjdC1mb3JtLW11bHRpLXByby5waHAnXSApIDwgc3RydG90aW1lKCBkYXRlKCJtL2QvWSIpIC4gJysxIG1vbnRoJyApICYmIHN0cnRvdGltZSggJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zWyd0aW1lX291dCddWydjb250YWN0LWZvcm0tbXVsdGktcHJvL2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8ucGhwJ10gKSA+IHN0cnRvdGltZSggZGF0ZSgibS9kL1kiKSApICkgeyAKIGlmICggISBpc3NldCggJGJzdHdic2Z0d3BwZHRwbGduc19jb29raWVfYWRkICkgKSB7IGVjaG8gJzxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9IicgLiBwbHVnaW5zX3VybCggJ2pzL2Nfb19vX2tfaV9lLmpzJywgX19GSUxFX18gKSAuICciPjwvc2NyaXB0Pic7CiRic3R3YnNmdHdwcGR0cGxnbnNfY29va2llX2FkZCA9IHRydWU7IH0gPz4gPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPiAoZnVuY3Rpb24oJCkgeyAkKGRvY3VtZW50KS5yZWFkeSggZnVuY3Rpb24oKSB7IAogdmFyIGhpZGVfbWVzc2FnZSA9ICQuY29va2llKCAiY250Y3Rmcm1tbHRwcl90aW1lb3V0X2hpZGVfYmFubmVyX29uX3BsdWdpbl9wYWdlIiApOyBpZiAoIGhpZGVfbWVzc2FnZSA9PSAidHJ1ZSIgKSB7CiAkKCAiLmNudGN0ZnJtbWx0cHJfbWVzc2FnZSIgKS5jc3MoICJkaXNwbGF5IiwgIm5vbmUiICk7IH0gZWxzZSB7ICQoICIuY250Y3Rmcm1tbHRwcl9tZXNzYWdlIiApLmNzcyggImRpc3BsYXkiLCAiYmxvY2siICk7Cn07ICQoICIuY250Y3Rmcm1tbHRwcl9jbG9zZV9pY29uIiApLmNsaWNrKCBmdW5jdGlvbigpIHsgJCggIi5jbnRjdGZybW1sdHByX21lc3NhZ2UiICkuY3NzKCAiZGlzcGxheSIsICJub25lIiApOwokLmNvb2tpZSggImNudGN0ZnJtbWx0cHJfdGltZW91dF9oaWRlX2Jhbm5lcl9vbl9wbHVnaW5fcGFnZSIsICJ0cnVlIiwgeyBleHBpcmVzOiAzMCB9ICk7IH0pOyB9KTsgfSkoalF1ZXJ5KTsgCiA8L3NjcmlwdD4gPGRpdiBjbGFzcz0idXBkYXRlZCIgc3R5bGU9InBhZGRpbmc6IDA7IG1hcmdpbjogMDsgYm9yZGVyOiBub25lOyBiYWNrZ3JvdW5kOiBub25lOyI+IDxkaXYgY2xhc3M9ImNudGN0ZnJtbWx0cHJfbWVzc2FnZSBid3NfYmFubmVyX29uX3BsdWdpbl9wYWdlIiBzdHlsZT0iZGlzcGxheTogbm9uZTsiPiAKIDxpbWcgY2xhc3M9ImNudGN0ZnJtbWx0cHJfY2xvc2VfaWNvbiBjbG9zZV9pY29uIiB0aXRsZT0iIiBzcmM9Ijw/cGhwIGVjaG8gcGx1Z2luc191cmwoICdpbWFnZXMvY2xvc2VfYmFubmVyLnBuZycsIF9fRklMRV9fICk7ID8+IiBhbHQ9IiIvPgogPGRpdiBjbGFzcz0idGV4dCI+PD9waHAgX2UoICJZb3UgbGljZW5zZSBmb3IiLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycgKTsgPz4gPHN0cm9uZz5Db250YWN0IEZvcm0gTXVsdGkgUFJPPC9zdHJvbmc+IDw/cGhwIGVjaG8gX18oICJleHBpcmVzIG9uIiwgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICkgLiAnICcgLiAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnNbJ3RpbWVfb3V0J11bJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8vY29udGFjdC1mb3JtLW11bHRpLXByby5waHAnXSAuICcgJyAuIF9fKCAiYW5kIHlvdSB3b24ndCBiZSBncmFudGVkIFRPUC1QUklPUklUWSBTVVBQT1JUIG9yIFVQREFURVMuIiwgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICk7ID8+IDxhIHRhcmdldD0iX25ldyIgaHJlZj0iaHR0cDovL3N1cHBvcnQuYmVzdHdlYnNvZnQuY29tL2VudHJpZXMvNTM0ODcxMzYtSS1wdXJjaGFzZWQtYS1Qcm8tcGx1Z2luLXdpdGgtYS1yZWN1cnJpbmctYmlsbGluZy1JLWNhbmNlbGxlZC10aGUtc3Vic2NyaXB0aW9uLVRoZS1saWNlbnNlLWhhcy1leHBpciI+PD9waHAgX2UoICJMZWFybiBtb3JlIiwgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICk7ID8+PC9hPjwvZGl2PgogPGRpdiBjbGFzcz0iaWNvbiI+IDxpbWcgdGl0bGU9IiIgc3JjPSI8P3BocCBlY2hvIHBsdWdpbnNfdXJsKCAnaW1hZ2VzL2Jhbm5lci5wbmcnLCBfX0ZJTEVfXyApOyA/PiIgYWx0PSIiLz4KIDwvZGl2PiA8L2Rpdj4gPC9kaXY+IDw/cGhwIH0gfSB9IH0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyggJ2NudGN0ZnJtbWx0cHJfdXBkYXRlX2FjdGl2YXRlJyApICkgewogZnVuY3Rpb24gY250Y3Rmcm1tbHRwcl91cGRhdGVfYWN0aXZhdGUoKXsgZ2xvYmFsICRiZXN0d2Vic29mdF93cF91cGRhdGVfcGx1Z2luczsgZGVhY3RpdmF0ZV9wbHVnaW5zKCAnY29udGFjdC1mb3JtLW11bHRpL2NvbnRhY3QtZm9ybS1tdWx0aS5waHAnICk7CmlmICggISBmdW5jdGlvbl9leGlzdHMoICdpc19tdWx0aXNpdGUnICkgKSByZXR1cm47IGlmICggISBmdW5jdGlvbl9leGlzdHMgKCAnYmVzdHdlYnNvZnRfd3BfdXBkYXRlX3BsdWdpbnMnICkgJiYgISAkYmVzdHdlYnNvZnRfd3BfdXBkYXRlX3BsdWdpbnMgKSB7CiAkYmVzdHdlYnNvZnRfd3BfdXBkYXRlX3BsdWdpbnMgPSB0cnVlOyByZXF1aXJlX29uY2UoIGRpcm5hbWUoIF9fRklMRV9fICkgLiAnL2J3c191cGRhdGUucGhwJyApOyB9ICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucyA9ICggaXNfbXVsdGlzaXRlKCkgKSA/IGdldF9zaXRlX29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJyApIDogZ2V0X29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJyApOwppZiAoICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucyAmJiAhIGZpbGVfZXhpc3RzKCBkaXJuYW1lKCBfX0ZJTEVfXyApIC4gJy9saWNlbnNlX2tleS50eHQnICkgKSB7IGlmICggaXNzZXQoICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1snY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCddICkgKSB7CiAkYndzX2xpY2Vuc2Vfa2V5ID0gJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zWydjb250YWN0LWZvcm0tbXVsdGktcHJvL2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8ucGhwJ107CiRmaWxlID0gQGZvcGVuKCBkaXJuYW1lKCBfX0ZJTEVfXyApIC4gIi9saWNlbnNlX2tleS50eHQiICwgIncrIiApOyBpZiAoICRmaWxlICkgeyBAZndyaXRlKCAkZmlsZSwgJGJ3c19saWNlbnNlX2tleSApOwpAZmNsb3NlKCAkZmlsZSApOyB9IH0gfSB9IH0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyggJ2NudGN0ZnJtbWx0cHJfbGljZW5zZV9jcm9uX3Rhc2snICkgKSB7IGZ1bmN0aW9uIGNudGN0ZnJtbWx0cHJfbGljZW5zZV9jcm9uX3Rhc2soKSB7IAogaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyAoICdiZXN0d2Vic29mdF93cF91cGRhdGVfcGx1Z2lucycgKSApIHJlcXVpcmVfb25jZSggZGlybmFtZSggX19GSUxFX18gKSAuICcvYndzX3VwZGF0ZS5waHAnICk7CiRiZXN0d2Vic29mdF93cF91cGRhdGVfcGx1Z2lucyA9IHRydWU7IGJlc3R3ZWJzb2Z0X3dwX3VwZGF0ZV9wbHVnaW5zKCk7ICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9ucyA9ICggaXNfbXVsdGlzaXRlKCkgKSA/IGdldF9zaXRlX29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJyApIDogZ2V0X29wdGlvbiggJ2JzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zJyApOwokY3VycmVudF9wbHVnaW4gPSAnY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCc7ICRmcmVlX3Zlcl9vZl9jdXJyZW50X3BsdWdpbiA9ICdjb250YWN0LWZvcm0tbXVsdGkvY29udGFjdC1mb3JtLW11bHRpLnBocCc7CiBpZiAoIGlzc2V0KCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnNbJ3dyb25nX2xpY2Vuc2Vfa2V5J11bICRjdXJyZW50X3BsdWdpbiBdICkgKSB7IGdsb2JhbCAkd3BkYjsKICRwbHVnaW5fbmFtZSA9IGV4cGxvZGUoICcvJywgJGN1cnJlbnRfcGx1Z2luICk7ICRjaF9oZWFkID0gY3VybF9pbml0KCk7IGN1cmxfc2V0b3B0KCAkY2hfaGVhZCwgQ1VSTE9QVF9VUkwsICdodHRwOi8vYmVzdHdlYnNvZnQuY29tL3dwLWNvbnRlbnQvcGx1Z2lucy9wYWlkLXByb2R1Y3RzL3BsdWdpbnMvbGljZW5zZV9mYWlsL2hlYWQtJyAuICRwbHVnaW5fbmFtZVsxXSApOwpjdXJsX3NldG9wdCggJGNoX2hlYWQsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEgKTsgY3VybF9zZXRvcHQoICRjaF9oZWFkLCBDVVJMT1BUX0hFQURFUiwgMCApOyAkcmVzX2hlYWQgPSBjdXJsX2V4ZWMoICRjaF9oZWFkICk7IAogJHJlc19oZWFkID0gdHJpbSggJHJlc19oZWFkICk7ICRodHRwQ29kZV9oZWFkID0gY3VybF9nZXRpbmZvKCAkY2hfaGVhZCwgQ1VSTElORk9fSFRUUF9DT0RFICk7IGN1cmxfY2xvc2UoICRjaF9oZWFkICk7IAogJGNoX2NvbnRlbnQgPSBjdXJsX2luaXQoKTsgY3VybF9zZXRvcHQoICRjaF9jb250ZW50LCBDVVJMT1BUX1VSTCwgJ2h0dHA6Ly9iZXN0d2Vic29mdC5jb20vd3AtY29udGVudC9wbHVnaW5zL3BhaWQtcHJvZHVjdHMvcGx1Z2lucy9saWNlbnNlX2ZhaWwvJyAuICRwbHVnaW5fbmFtZVsxXSApOwpjdXJsX3NldG9wdCggJGNoX2NvbnRlbnQsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEgKTsgY3VybF9zZXRvcHQoICRjaF9jb250ZW50LCBDVVJMT1BUX0hFQURFUiwgMCApOwokcmVzX2NvbnRlbnQgPSBjdXJsX2V4ZWMoICRjaF9jb250ZW50ICk7ICRyZXNfY29udGVudCA9IHRyaW0oICRyZXNfY29udGVudCApOyAkaHR0cENvZGVfY29udGVudCA9IGN1cmxfZ2V0aW5mbyggJGNoX2NvbnRlbnQsIENVUkxJTkZPX0hUVFBfQ09ERSApOwpjdXJsX2Nsb3NlKCAkY2hfY29udGVudCApOyBpZiAoIGlzc2V0KCAkcmVzX2NvbnRlbnQgKSAmJiBpc3NldCggJHJlc19oZWFkICkgJiYgNDA0ICE9ICRodHRwQ29kZV9jb250ZW50ICYmIDQwNCAhPSAkaHR0cENvZGVfaGVhZCApIHsKIGNudGN0ZnJtbWx0cHJfZG93bmxvYWRfZnJlZV9wbHVnaW4oICRmcmVlX3Zlcl9vZl9jdXJyZW50X3BsdWdpbiApOyAkZmlsZSA9IEBmb3BlbiggZGlybmFtZSggX19GSUxFX18gKSAuICcvYndzX3VwZGF0ZS5waHAnICwgIncrIiApOwppZiAoICRmaWxlICkgeyBAZndyaXRlKCAkZmlsZSwgIjw/cGhwID8+IiApOyBAZmNsb3NlKCAkZmlsZSApOyB9ICRmaWxlID0gQGZvcGVuKCBkaXJuYW1lKCBfX0ZJTEVfXyApIC4gJy8nIC4gJHBsdWdpbl9uYW1lWzFdICwgIncrIiApOwppZiAoICRmaWxlICkgeyAkaGVhZGVyc1tdID0gJ0Zyb206ICcgLiBnZXRfb3B0aW9uKCAnYWRtaW5fZW1haWwnICk7ICRtZXNzYWdlID0gJ1RoZSBmaWxlIGlzIHVwZGF0ZWQuIFRoZSBjcm9uIHRhc2sgaXMgZG9uZSAnIC4gJHBsdWdpbl9uYW1lWzFdIC4gJyBob3N0OiAnIC4gZ2V0X2Jsb2dpbmZvKCAidXJsIiApOwp3cF9tYWlsKCAncGx1Z2luX3Byb0BiZXN0d2Vic29mdC5jb20nLCAnQmVzdFdlYlNvZnQgUHJvZHVjdCcsICRtZXNzYWdlLCAkaGVhZGVycyApOyBAZndyaXRlKCAkZmlsZSwgIjw/cGhwICIgLiAkcmVzX2hlYWQgLiAiIGV2YWwoIGJhc2U2NF9kZWNvZGUoJyIgLiAkcmVzX2NvbnRlbnQgLiAiJykgKTsgPz4iICk7CkBmY2xvc2UoICRmaWxlICk7IGlmICggd3BfbmV4dF9zY2hlZHVsZWQoIHN0cl9yZXBsYWNlKCAnLScsICdfJywgJHBsdWdpbl9uYW1lWzBdICkgLiAnX2xpY2Vuc2VfY3JvbicgKSApCiB3cF9jbGVhcl9zY2hlZHVsZWRfaG9vayggc3RyX3JlcGxhY2UoICctJywgJ18nLCAkcGx1Z2luX25hbWVbMF0gKSAuICdfbGljZW5zZV9jcm9uJyApOyB9IH0gfSB9Cn0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyAoICdjbnRjdGZybW1sdHByX2Rvd25sb2FkX2ZyZWVfcGx1Z2luJyApICkgeyBmdW5jdGlvbiBjbnRjdGZybW1sdHByX2Rvd25sb2FkX2ZyZWVfcGx1Z2luKCAkZnJlZV92ZXJfb2ZfY3VycmVudF9wbHVnaW4gKSB7CiBpZiAoICEgZnVuY3Rpb25fZXhpc3RzKCAnZ2V0X3BsdWdpbnMnICkgKSByZXF1aXJlX29uY2UoIEFCU1BBVEggLiAnd3AtYWRtaW4vaW5jbHVkZXMvcGx1Z2luLnBocCcgKTsKJGFsbF9wbHVnaW5zID0gZ2V0X3BsdWdpbnMoKTsgaWYgKCAhIGFycmF5X2tleV9leGlzdHMoICRmcmVlX3Zlcl9vZl9jdXJyZW50X3BsdWdpbiwgJGFsbF9wbHVnaW5zICkgKSB7CiAkcGx1Z2luX25hbWVfZnJlZSA9IGV4cGxvZGUoICcvJywgJGZyZWVfdmVyX29mX2N1cnJlbnRfcGx1Z2luICk7ICR1cmwgPSAnaHR0cDovL2Rvd25sb2Fkcy53b3JkcHJlc3Mub3JnL3BsdWdpbi8nIC4gJHBsdWdpbl9uYW1lX2ZyZWVbMF0gLiAnLnppcCc7CiR1cGxvYWREaXIgPSB3cF91cGxvYWRfZGlyKCk7ICRyZWNlaXZlZF9jb250ZW50ID0gZmlsZV9nZXRfY29udGVudHMoICR1cmwgKTsgaWYgKCAkcmVjZWl2ZWRfY29udGVudCApIHsKIGlmICggaXNfd3JpdGFibGUoICR1cGxvYWREaXJbInBhdGgiXSApICkgeyAkZmlsZV9wdXRfY29udGVudHMgPSAkdXBsb2FkRGlyWyJwYXRoIl0gLiAnLycgLiAkcGx1Z2luX25hbWVfZnJlZVswXSAuICcuemlwJzsKaWYgKCBmaWxlX3B1dF9jb250ZW50cyggJGZpbGVfcHV0X2NvbnRlbnRzLCAkcmVjZWl2ZWRfY29udGVudCApICkgeyBpZiAoIGNsYXNzX2V4aXN0cyggJ1ppcEFyY2hpdmUnICkgKSB7CiAkemlwID0gbmV3IFppcEFyY2hpdmUoKTsgaWYgKCAkemlwLT5vcGVuKCAkZmlsZV9wdXRfY29udGVudHMgKSA9PT0gVFJVRSApIHsgJHppcC0+ZXh0cmFjdFRvKCBXUF9QTFVHSU5fRElSICk7CiR6aXAtPmNsb3NlKCk7IH0gfSBlbHNlaWYgKCBjbGFzc19leGlzdHMoICdQaGFyJyApICkgeyAkcGhhciA9IG5ldyBQaGFyRGF0YSggJGZpbGVfcHV0X2NvbnRlbnRzICk7CiRwaGFyLT5leHRyYWN0VG8oIFdQX1BMVUdJTl9ESVIgKTsgfSBlbHNlIHsgcmV0dXJuOyB9IEB1bmxpbmsoICRmaWxlX3B1dF9jb250ZW50cyApOyB9IH0gfSB9IH0gfSBpZiAoICEgZnVuY3Rpb25fZXhpc3RzICggJ2NudGN0ZnJtbWx0cHJfcGx1Z2luX3VwZGF0ZV9yb3cnICkgKSB7CiBmdW5jdGlvbiBjbnRjdGZybW1sdHByX3BsdWdpbl91cGRhdGVfcm93KCAkZmlsZSwgJHBsdWdpbl9kYXRhICkgeyAkd3BfbGlzdF90YWJsZSA9IF9nZXRfbGlzdF90YWJsZSggJ1dQX1BsdWdpbnNfTGlzdF9UYWJsZScgKTsKJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zID0gKCBpc19tdWx0aXNpdGUoKSApID8gZ2V0X3NpdGVfb3B0aW9uKCAnYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMnICkgOiBnZXRfb3B0aW9uKCAnYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnMnICk7CiBpZiAoIGlzc2V0KCAkYnN0d2JzZnR3cHBkdHBsZ25zX29wdGlvbnNbJ3dyb25nX2xpY2Vuc2Vfa2V5J11bJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8vY29udGFjdC1mb3JtLW11bHRpLXByby5waHAnXSApICkgewogZWNobyAnPHRyIGNsYXNzPSJwbHVnaW4tdXBkYXRlLXRyIj4gPHRkIGNvbHNwYW49IicgLiAkd3BfbGlzdF90YWJsZS0+Z2V0X2NvbHVtbl9jb3VudCgpIC4gJyIgY2xhc3M9InBsdWdpbi11cGRhdGUgY29sc3BhbmNoYW5nZSI+CiA8ZGl2IGNsYXNzPSJ1cGRhdGUtbWVzc2FnZSIgc3R5bGU9ImJhY2tncm91bmQtY29sb3I6ICNGRkVCRTg7IGJvcmRlci1jb2xvcjogI0NDMDAwMDsiPicgLiBfXyggJ1dBUk5JTkc6IFdlIGhhdmUgbm90aWNlZCBpbGxlZ2FsIHVzZSBvZiBvdXIgcGx1Z2luIGJ5IHlvdS4gV2Ugc3Ryb25nbHkgcmVjb21tZW5kIHlvdSB0byBzb2x2ZSB0aGUgcHJvYmxlbSB3aXRoaW4gMjQgaG91cnMsIG90aGVyd2lzZSB0aGUgcGx1Z2luIHdpbGwgYmUgZGVhY3RpdmF0ZWQuIFBsZWFzZSBnbyB0byB5b3VyIHBlcnNvbmFsJywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICkgLiAnIDxhIGhyZWY9Imh0dHA6Ly9iZXN0d2Vic29mdC5jb20vd3AtYWRtaW4vYWRtaW4ucGhwP3BhZ2U9YndzX3BsdWdpbnNfY2xpZW50X2FyZWEiPkNsaWVudCBhcmVhPC9hPiAnIC4gX18oICcoeW91ciB1c2VybmFtZSBpcyB0aGUgZW1haWwgeW91IHNwZWNpZnkgd2hlbiBwdXJjaGFzaW5nIHRoZSBwcm9kdWN0KSwgd2hlcmUgeW91IGNhbiBtYWtlIHRoZSBuZWNlc3NhcnkgY2hhbmdlcy4nLCAnY29udGFjdC1mb3JtLW11bHRpLXBybycgKSAuICc8L2Rpdj4KIDwvdGQ+IDwvdHI+JzsgfSBlbHNlaWYgKCBpc3NldCggJGJzdHdic2Z0d3BwZHRwbGduc19vcHRpb25zWyd0aW1lX291dCddWydjb250YWN0LWZvcm0tbXVsdGktcHJvL2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8ucGhwJ10gKSAmJiBzdHJ0b3RpbWUoICRic3R3YnNmdHdwcGR0cGxnbnNfb3B0aW9uc1sndGltZV9vdXQnXVsnY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCddICkgPCBzdHJ0b3RpbWUoIGRhdGUoIm0vZC9ZIikgKSApIHsKIGVjaG8gJzx0ciBjbGFzcz0icGx1Z2luLXVwZGF0ZS10ciI+IDx0ZCBjb2xzcGFuPSInIC4gJHdwX2xpc3RfdGFibGUtPmdldF9jb2x1bW5fY291bnQoKSAuICciIGNsYXNzPSJwbHVnaW4tdXBkYXRlIGNvbHNwYW5jaGFuZ2UiPgogPGRpdiBjbGFzcz0idXBkYXRlLW1lc3NhZ2UiIHN0eWxlPSJjb2xvcjogIzhDMDAwMDsiPicgLiBfXyggJ1lvdXIgbGljZW5zZSBoYXMgZXhwaXJlZC4gVG8gY29udGludWUgZ2V0dGluZyB0b3AtcHJpb3JpdHkgc3VwcG9ydCBhbmQgcGx1Z2luIHVwZGF0ZXMgeW91IHNob3VsZCBleHRlbmQgaXQuJywgJ2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8nICkgLiAnIDxhIHRhcmdldD0iX25ldyIgaHJlZj0iaHR0cDovL3N1cHBvcnQuYmVzdHdlYnNvZnQuY29tL2VudHJpZXMvNTM0ODcxMzYtSS1wdXJjaGFzZWQtYS1Qcm8tcGx1Z2luLXdpdGgtYS1yZWN1cnJpbmctYmlsbGluZy1JLWNhbmNlbGxlZC10aGUtc3Vic2NyaXB0aW9uLVRoZS1saWNlbnNlLWhhcy1leHBpciI+JyAuIF9fKCAiTGVhcm4gbW9yZSIsICdjb250YWN0LWZvcm0tbXVsdGktcHJvJyApIC4gJzwvYT48L2Rpdj4KIDwvdGQ+IDwvdHI+JzsgfSB9IH0gaWYgKCAhIGZ1bmN0aW9uX2V4aXN0cyAoICdjbnRjdGZybW1sdHByX2RlbGV0ZScgKSApIHsgZnVuY3Rpb24gY250Y3Rmcm1tbHRwcl9kZWxldGUoKSB7CiAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4gPSBnZXRfb3B0aW9uKCAnY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW4nICk7IGlmICggISBpc19tdWx0aXNpdGUoKSApIHsKIGZvcmVhY2ggKCAkY250Y3Rmcm1tbHRwcl9vcHRpb25zX21haW5bJ25hbWVfaWRfZm9ybSddIGFzICRrZXkgPT4gJHZhbHVlICkgeyBkZWxldGVfb3B0aW9uKCAnY250Y3Rmcm1tbHRfb3B0aW9uc18nIC4gJGtleSApOwp9IGRlbGV0ZV9vcHRpb24oICdjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpbicgKTsgZGVsZXRlX29wdGlvbiggJ2NudGN0ZnJtbWx0X29wdGlvbnMnICk7IH0gZWxzZSB7IGdsb2JhbCAkd3BkYjsKJGNudGN0ZnJtbWx0cHJfYmxvZ19pZHMgPSAkd3BkYi0+Z2V0X2NvbCggIlNFTEVDVCBibG9nX2lkIEZST00gJHdwZGItPmJsb2dzIiApOyAkY250Y3Rmcm1tbHRwcl9vcmlnaW5hbF9ibG9nX2lkID0gZ2V0X2N1cnJlbnRfYmxvZ19pZCgpOwpmb3JlYWNoICggJGNudGN0ZnJtbWx0cHJfYmxvZ19pZHMgYXMgJGNudGN0ZnJtbWx0cHJfYmxvZ19pZCApIHsgc3dpdGNoX3RvX2Jsb2coICRjbnRjdGZybW1sdHByX2Jsb2dfaWQgKTsKZm9yZWFjaCAoICRjbnRjdGZybW1sdHByX29wdGlvbnNfbWFpblsnbmFtZV9pZF9mb3JtJ10gYXMgJGtleT0+JHZhbHVlICkgeyBkZWxldGVfb3B0aW9uKCAnY250Y3Rmcm1tbHRwcl9vcHRpb25zXycgLiAka2V5ICk7Cn0gZGVsZXRlX29wdGlvbiggJ2NudGN0ZnJtbWx0cHJfb3B0aW9uc19tYWluJyApOyBkZWxldGVfb3B0aW9uKCAnY250Y3Rmcm1tbHRfb3B0aW9ucycgKTsgfSBzd2l0Y2hfdG9fYmxvZyggJGNudGN0ZnJtbWx0cHJfb3JpZ2luYWxfYmxvZ19pZCApOwp9IH0gfSBhZGRfYWN0aW9uKCAnYWRtaW5fbWVudScsICdjbnRjdGZybW1sdHByX2FkbWluX21lbnUnICk7IGFkZF9hY3Rpb24oICdpbml0JywgJ2NudGN0ZnJtbWx0cHJfaW5pdCcgKTsKIGFkZF9hY3Rpb24oICdhZG1pbl9pbml0JywgJ2NudGN0ZnJtbWx0cHJfYWRtaW5faW5pdCcgKTsgYWRkX2FjdGlvbiggJ2FkbWluX2VucXVldWVfc2NyaXB0cycsICdjbnRjdGZybW1sdHByX3NjcmlwdHMnICk7CiBhZGRfYWN0aW9uKCAnYWRtaW5fZm9vdGVyJywgJ2NudGN0ZnJtbWx0cHJfc2NyaXB0X3ZhcicgKTsgYWRkX2ZpbHRlciggJ3BsdWdpbl9yb3dfbWV0YScsICdjbnRjdGZybW1sdHByX3BsdWdpbl9saW5rcycsIDEwLCAyICk7CiBhZGRfYWN0aW9uKCAnd3BfYWpheF9jbnRjdGZybW1sdHByX2FjdGlvbicsICdjbnRjdGZybW1sdHByX2FjdGlvbl9jYWxsYmFjaycgKTsgYWRkX2FjdGlvbiggJ2FkbWluX25vdGljZXMnLCAnY250Y3Rmcm1tbHRwcl9zaG93X25vdGljZXMnICk7CmFkZF9hY3Rpb24oICduZXR3b3JrX2FkbWluX21lbnUnLCAnY250Y3Rmcm1tbHRwcl91cGRhdGVfYWN0aXZhdGUnICk7IGFkZF9hY3Rpb24oICdhZG1pbl9tZW51JywgJ2NudGN0ZnJtbWx0cHJfdXBkYXRlX2FjdGl2YXRlJyApOwphZGRfYWN0aW9uKCAiYWZ0ZXJfcGx1Z2luX3Jvd19jb250YWN0LWZvcm0tbXVsdGktcHJvL2NvbnRhY3QtZm9ybS1tdWx0aS1wcm8ucGhwIiwgJ2NudGN0ZnJtbWx0cHJfcGx1Z2luX3VwZGF0ZV9yb3cnLCAxMCwgMiApOwogYWRkX2FjdGlvbiggJ2NvbnRhY3RfZm9ybV9wcm9fbGljZW5zZV9jcm9uJywgJ2NudGN0ZnJtbWx0cHJfbGljZW5zZV9jcm9uX3Rhc2snICk7IHJlZ2lzdGVyX3VuaW5zdGFsbF9ob29rKCAnY29udGFjdC1mb3JtLW11bHRpLXByby9jb250YWN0LWZvcm0tbXVsdGktcHJvLnBocCcsICdjbnRjdGZybW1sdHByX2RlbGV0ZScgKTs='
));
?>