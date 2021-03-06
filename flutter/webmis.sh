#!/bin/bash

# 配置
s=$1

# 帮助
helpText(){
  echo "用法:"
  echo "  ./webmis.sh <command>"
  echo "<command>"
  echo "  serve         运行: flutter run"
  echo "  install       安装依赖包: flutter pub get"
  echo "  build         打包: flutter build apk ios"
}

# 运行
if [ "$s" == "serve" ]; then
  flutter run
# 安装
elif [ "$s" == "install" ]; then
  flutter pub get
# 打包
elif [ "$s" == "build" ]; then
  flutter build apk
  flutter build ios
else
  helpText
fi
