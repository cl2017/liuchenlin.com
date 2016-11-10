	var myCanvas = document.getElementById('ggk');
	var gray = myCanvas.getContext('2d');

	var w=window.innerWidth;
	var h=window.innerHeight; //获取设备的宽高

	myCanvas.width=w;
	myCanvas.height=h; //设置canvas的宽高与设备相同

	gray.beginPath();
	gray.fillStyle = "#aaa";
	gray.fillRect(0,0,w,h);
	gray.font = "Bold 30px Arial";
	gray.textAlign = "center";
	gray.font = '40px Arial';
	gray.fillStyle = "#4A4A4A";
	gray.fillText("刮一刮",myCanvas.width/2,100);
	gray.closePath();
	gray.globalCompositeOperation="destination-out";
	

	myCanvas.addEventListener('touchmove',move);
	// myCanvas.addEventListener('mousemove',move);
	function move(e) {
		e.preventDefault();
		gray.beginPath();
		gray.fillStyle = "#f00";
		gray.arc(e.targetTouches[0].clientX, e.targetTouches[0].clientY, 40, 0, Math.PI*2);
		gray.fill();
		gray.closePath();
	}

	myCanvas.addEventListener('touchend',end);
	// myCanvas.addEventListener('mouseup',end);
	function end(e) {
				e.preventDefault();
		var num = 0;
		var datas = gray.getImageData(0,0,w,h);
		for (var i = 0; i < datas.data.length; i++) {
			if (datas.data[i] == 0) {
				num++;
			}
		}
		if (num >= datas.data.length * 0.7) {
			gray.fillRect(0,0,w,h);
		}
	}

	// //监听窗口大小 重新设置绘图
	// $(window).resize(resizeCanvas);
	//  function resizeCanvas() {
	//     myCanvas.attr("width", $(window).get(0).innerWidth);
	//     myCanvas.attr("height", $(window).get(0).innerHeight);
	//     context.fillRect(0, 0, myCanvas.width(), myCanvas.height());
	//  };
	//  resizeCanvas();