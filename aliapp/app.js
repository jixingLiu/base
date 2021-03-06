App({
  /* 公共数据 */
  globalData:{
    platform: '',
    // 系统信息
    statusBarHeight: 0,
    titleBarHeight: 0,
    screenWidth: 0,
    screenHeight: 0,
  },
  /* 初始化 */
  onLaunch() {
    // 状态栏信息
    my.getSystemInfo({
      success: (res)=>{
        this.globalData.platform = res.platform;
        this.globalData.statusBarHeight = res.statusBarHeight;
        this.globalData.titleBarHeight = res.titleBarHeight;
        this.globalData.screenWidth = res.screenWidth;
        this.globalData.screenHeight = res.screenHeight;
      },
    });
    // 隐藏收藏
    my.hideAllFavoriteMenu();
  },
  onHide(){
  },
  onShow(){
  },
});
