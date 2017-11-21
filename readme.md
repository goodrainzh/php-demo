## php语言计划任务示例代码

### 文件结构

```bash
├── cron.txt     # crontab 格式的计划任务配置
├── index.php    # 读取计划任务写入的 /tmp/test.txt 文件并显示
├── Procfile     # 运行计划任务并启动web server
└── worker.php   # 计划任务调用的脚本
```

### 特别说明

- 计划任务中执行的php命令一定要写绝对路径
- 如果不需要运行web server 那么 cron服务一定要以前台的方式运行 `cron -f`