package main

import (
	"fmt"
	"os/exec"
	"bytes"
	"time"
)

func query(){
   //函数返回一个*Cmd，用于使用给出的参数执行name指定的程序
   cmd := exec.Command("f:/phpStudyo/php/php-5.4.45/php", `C:\Users\Oshine\Desktop\cloudbooks.top\controller\demo.php`)

   //读取io.Writer类型的cmd.Stdout，再通过bytes.Buffer(缓冲byte类型的缓冲器)将byte类型转化为string类型(out.String():这是bytes类型提供的接口)
   var out bytes.Buffer
   cmd.Stdout = &out

   //Run执行c包含的命令，并阻塞直到完成。  这里stdout被取出，cmd.Wait()无法正确获取stdin,stdout,stderr，则阻塞在那了
   err := cmd.Run()



   fmt.Println( out.String(), err)
}


func main() {

	for i:=12;i>0;i--{
		go query()
	}


	time.Sleep(10*time.Second)
}