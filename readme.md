# composer 发布扩展包练习

> ### 自己尝试写一个PHP扩展包发布出去，然后目的是能够使用`composer`安装。

- 命名规则：你要发布的包需要按照`厂商名/包名`即`vendor/package`格式命名；厂商名可以去**packagist**搜索一下，确认没有重名再使用。
- 每个组件应该有自己的命名空间。`命名空间`和上面的`命名规则`毫无关系。
- 命名空间：如果你的扩展包里使用了命名空间，那么注意必须要在`composer.json`里添加 **`autoload`**，否则composer安装之后也用不了。我第一次就是没加**autoload**，结果使用不了。**autoload里是配置你这个包的命名空间及对应目录**
```
{
    "name": "yurunsoft/composer-package-demo",
    "autoload": {
        "psr-4": {
            "Yurun\\ComposerPackageDemo\\": "src/"
        }
    }
}
```
下面是我的
```
{
	"name": "bneglect/publish-test",
	"description": "用来测试发布的扩展包，没有实际用处，只是一次练习~",
	"require": {
		"php": "^7.0"
	},
	"autoload": {
        "psr-4": {
            "test\\test\\": "/"
        }
    }
}
```
- 必须有`composer.json`文件在项目的根目录中。composer.json文件中必须至少包含一下几项：
```
{
    "name": "your-vendor-name/package-name",
    "description": "A short description of what your package does",
    "require": {
        "php": "^7.2",
        "another-vendor/package": "1.*"
    }
}
```
- **composer.json**文件必须是`composer init` 命令生成吗？自己新建不行吗？
- **特别注意**：composer.json文件里每一个`}`前面都不能有逗号，否则会导致解析失败。
- 这些准备好之后，就把这个包提交到`VCS`（版本库）中，然后登陆**packagist**，点击`submit`。
- 大功告成！！！~~~
