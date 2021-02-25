.loader{
  width: 200px;
  height: 200px;
  margin: 0 auto;
  position: relative;
}
.loader .inner{
  width: 200px;
  height: 200px;
  border-radius: 50%;
  transform: translateX(-50%) translateY(-50%);
  position: absolute;
  top: 50%;
  left: 50%;
  animation: animate 4s infinite;
}
.loader .inner:nth-child(1){ animation-delay: 4s; }
.loader .inner:nth-child(2){ animation-delay: 3.5s; }
.loader .inner:nth-child(3){ animation-delay: 3s; }
.loader .inner:nth-child(4){ animation-delay: 2.5s; }
.loader .inner:nth-child(5){ animation-delay: 2s; }
.loader .inner:nth-child(6){ animation-delay: 1.5s; }
.loader .inner:nth-child(7){ animation-delay: 1s; }
.loader .inner:nth-child(8){ animation-delay: 0.5s; }
@keyframes animate{
  0%{
      width: 0px;
      height: 0px;
      box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  }
  20%{ box-shadow: 0 5px 60px 15px rgba(255, 255, 255, 0.4) inset; }
  40%{ box-shadow: 0 5px 60px 15px rgba(255, 255, 255, 0.2) inset; }
  100%{
      width: 200px;
      height: 200px;
      box-shadow: 0 0 0 0 rgba(0, 0, 0, 0) inset;
  }
}
#preloader {
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: 9999;
  background-color: rgba(0,0,0,0.6);
  display: none;
}
.preloaderContent {
  position: relative;
  top: 50%;
  margin-top: -100px;
}