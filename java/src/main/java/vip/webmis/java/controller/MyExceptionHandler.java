package vip.webmis.java.controller;

import java.util.HashMap;

import javax.servlet.http.HttpServletRequest;

import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.bind.annotation.RestControllerAdvice;

@RestControllerAdvice
public class MyExceptionHandler {

  @ExceptionHandler(value = Exception.class)
  Object handleException(Exception e, HttpServletRequest request){
    HashMap<String, Object> map = new HashMap<>();
    map.put("code", 5000);
    map.put("msg", e.getMessage());
    return map;
  }
  
}