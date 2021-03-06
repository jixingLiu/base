package vip.webmis.java.model;

import com.alibaba.fastjson.JSONObject;

import vip.webmis.java.common.Inc;

/* 系统配置表 */
public class SysConfig extends Model {

  public int id = 0;
  public String title = "";
  public String name = "";
  public String val = "";
  public String ctime = "null";
  public String utime = "null";
  
  /* 构造函数 */
  public SysConfig() {
    this.setSource("sys_config"); //数据表
  }

  /* 创建 */
  public JSONObject beforeCreate(JSONObject fields){
    if(fields.get("ctime").equals("null")){
      fields.put("ctime",Inc.date("yyyy-MM-dd HH:mm:ss"));
    }
    return fields;
  }

  /* 更新 */
  public JSONObject beforeUpdate(JSONObject fields){
    if(fields.get("utime").equals("null")){
      fields.put("utime",Inc.date("yyyy-MM-dd HH:mm:ss"));
    }
    return fields;
  }

}
