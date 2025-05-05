<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('getCurrentGuard')) {
  /**
   * الحصول على الجارد الحالي النشط
   * 
   * @return string|null
   */
  function getCurrentGuard()
  {
    $guards = ['admin', 'web', 'saleOfficer', 'customerService'];

    foreach ($guards as $guard) {
      if (Auth::guard($guard)->check()) {
        return $guard;
      }
    }

    return null;
  }
}

if (!function_exists('abortCustom404')) {
  /**
   * عرض صفحة 404 مخصصة حسب نوع المستخدم
   * 
   * @return \Illuminate\Http\Response
   */
  function abortCustom404()
  {
    $guard = getCurrentGuard();
    
    // تسجيل حالة الجارد للسجلات (لأغراض التصحيح)
    // Log::info('Current Guard in abortCustom404:', ['guard' => $guard]);

    // تحديد الصفحة المناسبة
    $view = match ($guard) {
      'admin', 'web' => 'errors.web-404',
      'saleOfficer', 'customerService' => 'errors.dash-404',
      default => 'errors.web-404'
    };

    return response()->view($view, [], 404);
  }
}
