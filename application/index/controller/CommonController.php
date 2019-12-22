<?php
	/**
	**公共控制器
	**elson
	**2015-08-26
	**/
namespace app\index\controller;
use think\Controller;
vendor('rest');

class CommonController extends Controller
{
	
	
	
   public function _initialize(){
	   header('Content-Type:text/html;charset=utf-8');//设置编码格式
	   /**
	    * 设置站点头部信息
	    */
	  
	   /**
	    * 设置站点头部信息end
	    */
   }
   
   
   /*
    * 处理空操作
    */
   function _empty(){
   	echo "服务器繁忙";
   	//echo "<img src=>";
   }
   /*
    * 添加图片
    */
   public function addImg(){
   	 
   	//上传图片
   	$newsDate = date('Y-m-d',time());
   	$newsDate1 = date('Y-m-d H:i:s',time());
   	$newsDate2 = date('YmdHis',time());
   	$uptypes=array('image/jpg', //上传文件类型列表
   			'image/jpeg',
   			'image/png',
   			'image/pjpeg',
   			'image/gif',
   			'image/bmp',
   			'image/x-png',
   			'application/x-shockwave-flash');
   			$max_file_size=5000000; //上传文件大小限制, 单位BYTE 
   		$destination_folder="./static/uploads/"; //上传文件路径 
   		
   		$imgpreview=1; //是否生成预览图(1为生成,其他为不生成); 
   		$imgpreviewsize=1/2; //缩略图比例
   		
   		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   		{ 
   			echo $_FILES["upfile1"]['tmp_name'];
   		if (!is_uploaded_file($_FILES["upfile1"]['tmp_name'])) 
   		//是否存在文件 
   		{ 
   		echo "<script>alert('未选择专题图片，请重新选择1');history.back();</script>"; 
   		exit; 
   		} 
   		$file = $_FILES["upfile1"]; 
   		if($max_file_size < $file["size"]) 
   		//检查文件大小 
   		{ 
   		echo "<script>alert('图片文件太大，请重新选择1');history.back();</script>";  
   		exit; 
   		} 
   		if(!in_array($file["type"], $uptypes)) 
   		//检查文件类型 
   		{ 
   		echo "<font color='red'>只能上传图像文件！</font>"; 
   		exit; 
   		} 
   		if(!file_exists($destination_folder)) 
   		mkdir($destination_folder); 
   		$filename=$file["tmp_name"]; 
   		$image_size = getimagesize($filename); 
   		$pinfo=pathinfo($file["name"]); 
   		$ftype=$pinfo['extension']; 
   		$destination = $destination_folder.time().".".$ftype; 
   		$destination1 = time().".".$ftype;
   		if (file_exists($destination) && $overwrite != true) 
   		{ 
   		echo "<font color='red'>同名文件已存在了！</a>"; 
   		exit; 
   		} 
   		if(!move_uploaded_file ($filename, $destination)) 
   		{ 
   		echo "<font color='red'>移动文件出错！</a>"; 
   		exit; 
   		} 
   		$pinfo=pathinfo($destination); 
   		$fname=$pinfo['basename']; 
   		echo " <font color=red>已经成功上传</font><br>文件名: <font color=blue>".$destination_folder.$fname."</font><br>"; 
   		echo " 宽度:".$image_size[0]; 
   		echo " 长度:".$image_size[1]; 
   		
   		
   		if($imgpreview==1) 
   		{ 
   		$user_headport = $destination1;
   		//echo $user_headport;
   		return $user_headport;
   		//$subject_pic = $newsDate2.".".$ftype;
   		} 
   		
   		}
      	
      
          }
          
          
          /*
           * 添加图片
           */
          public function addImg2() {
          
          	//上传图片
          	$newsDate = date('Y-m-d', time());
          	$newsDate1 = date('Y-m-d H:i:s', time());
          	$newsDate2 = date('YmdHis', time());
          	$uptypes = array('image/jpg', //上传文件类型列表
          			'image/jpeg', 'image/png', 'image/pjpeg', 'image/gif', 'image/bmp', 'image/x-png', 'application/x-shockwave-flash');
          	$max_file_size = 5000000; //上传文件大小限制, 单位BYTE
          	$destination_folder = "./static/uploads/"; //上传文件路径
          	$imgpreview = 1; //是否生成预览图(1为生成,其他为不生成);
          	$imgpreviewsize = 1 / 2; //缩略图比例
          	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          		if (!is_uploaded_file($_FILES["upfile2"]['tmp_name']))
          		
         
          		//是否存在文件
          		{
          			echo "<script>alert('未选择专题图片，请重新选择2');history.back();</script>";
          			exit;
          		}
          		$file = $_FILES["upfile2"];
          		if ($max_file_size < $file["size"])
          		//检查文件大小
          		{
          			echo "<script>alert('图片文件太大，请重新选择2');history.back();</script>";
          			exit;
          		}
          		if (!in_array($file["type"], $uptypes))
          		//检查文件类型
          		{
          			echo "<font color='red'>只能上传图像文件！</font>";
          			exit;
          		}
          		if (!file_exists($destination_folder)) mkdir($destination_folder);
          		$filename = $file["tmp_name"];
          		$image_size = getimagesize($filename);
          		$pinfo = pathinfo($file["name"]);
          		$ftype = $pinfo['extension'];
          		$destination = $destination_folder.time().".".$ftype;
          		$destination1 = time().".".$ftype;
          		if (file_exists($destination) && $overwrite != true) {
          			echo "<font color='red'>同名文件已存在了！</a>";
          			exit;
          		}
          		if (!move_uploaded_file($filename, $destination)) {
          			echo "<font color='red'>移动文件出错！</a>";
          			exit;
          		}
          		
          		echo 'tmp_name';
          		
          		$pinfo = pathinfo($destination);
          		$fname = $pinfo['basename'];
          		echo " <font color=red>已经成功上传</font><br>文件名: <font color=blue>".$destination_folder.$fname."</font><br>";
          		echo " 宽度:".$image_size[0];
          		echo " 长度:".$image_size[1];
          
          		if ($imgpreview == 1) {
          			$user_headport = $destination1;
          			//echo $user_headport;
          			return $user_headport;
          			//$subject_pic = $newsDate2.".".$ftype;
          		}
          
          	}
          
          }
          
          
          /*
           * 添加图片
           */
          public function addImg3() {
          
          	//上传图片
          	$newsDate = date('Y-m-d', time());
          	$newsDate1 = date('Y-m-d H:i:s', time());
          	$newsDate2 = date('YmdHis', time());
          	$uptypes = array('image/jpg', //上传文件类型列表
          			'image/jpeg', 'image/png', 'image/pjpeg', 'image/gif', 'image/bmp', 'image/x-png', 'application/x-shockwave-flash');
          	$max_file_size = 5000000; //上传文件大小限制, 单位BYTE
          	$destination_folder = "./static/uploads/"; //上传文件路径
          	$imgpreview = 1; //是否生成预览图(1为生成,其他为不生成);
          	$imgpreviewsize = 1 / 2; //缩略图比例
          	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          		if (!is_uploaded_file($_FILES["upfile3"]['tmp_name']))
          		
          		echo 'tmp_name';
          		
          		//是否存在文件
          		{
          			echo "<script>alert('未选择专题图片，请重新选择3');history.back();</script>";
          			exit;
          		}
          		$file = $_FILES["upfile3"];
          		if ($max_file_size < $file["size"])
          		//检查文件大小
          		{
          			echo "<script>alert('图片文件太大，请重新选择3');history.back();</script>";
          			exit;
          		}
          		if (!in_array($file["type"], $uptypes))
          		//检查文件类型
          		{
          			echo "<font color='red'>只能上传图像文件！</font>";
          			exit;
          		}
          		if (!file_exists($destination_folder)) mkdir($destination_folder);
          		$filename = $file["tmp_name"];
          		$image_size = getimagesize($filename);
          		$pinfo = pathinfo($file["name"]);
          		$ftype = $pinfo['extension'];
          		$destination = $destination_folder.time().".".$ftype;
          		$destination1 = time().".".$ftype;
          		if (file_exists($destination) && $overwrite != true) {
          			echo "<font color='red'>同名文件已存在了！</a>";
          			exit;
          		}
          		if (!move_uploaded_file($filename, $destination)) {
          			echo "<font color='red'>移动文件出错！</a>";
          			exit;
          		}
          		
          		echo 'tmp_name';
          		
          		$pinfo = pathinfo($destination);
          		$fname = $pinfo['basename'];
          		echo " <font color=red>已经成功上传</font><br>文件名: <font color=blue>".$destination_folder.$fname."</font><br>";
          		echo " 宽度:".$image_size[0];
          		echo " 长度:".$image_size[1];
          
          		if ($imgpreview == 1) {
          			$user_headport = $destination1;
          			//echo $user_headport;
          			return $user_headport;
          			//$subject_pic = $newsDate2.".".$ftype;
          		}
          
          	}
          
          }
   
   /* 
     * $name为表单上传的name值 
     * $filePath为为保存在入口文件夹public下面uploads/下面的文件夹名称，没有的话会自动创建 
     * $width指定缩略宽度 
     * $height指定缩略高度 
     * 自动生成的缩略图保存在$filePath文件夹下面的thumb文件夹里，自动创建 
     * @return array 一个是图片路径，一个是缩略图路径，如下： 
     * array(2) { 
          ["img"] => string(57) "uploads/img/20171211\3d4ca4098a8fb0f90e5f53fd7cd71535.jpg" 
          ["thumb_img"] => string(63) "uploads/img/thumb/20171211/3d4ca4098a8fb0f90e5f53fd7cd71535.jpg" 
        } 
     */  
    protected function uploadFile($name,$filePath,$width,$height)  
    {  
        $file = request()->file($name);  
        if($file){  
            $filePaths = ROOT_PATH . 'public' . DS . 'uploads' . DS .$filePath;  
            if(!file_exists($filePaths)){  
                mkdir($filePaths,0777,true);  
            }  
            $info = $file->move($filePaths);  
            if($info){  
                $imgpath = 'uploads/'.$filePath.'/'.$info->getSaveName();  
                $image = \think\Image::open($imgpath);  
                $date_path = 'uploads/'.$filePath.'/thumb/'.date('Ymd');  
                if(!file_exists($date_path)){  
                    mkdir($date_path,0777,true);  
                }  
                $thumb_path = $date_path.'/'.$info->getFilename();  
                $image->thumb($width, $height)->save($thumb_path);  
                $data['img'] = $imgpath;  
                $data['thumb_img'] = $thumb_path;  
                return $data;  
            }else{  
                // 上传失败获取错误信息  
                return $file->getError();  
            }  
        }  
    }  
              
			
}
?>