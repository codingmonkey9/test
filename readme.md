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
- **特别注意**：composer.json文件里每一个`}`前面都不能有逗号，否则会导致解析失败。
- **包**里只能是类，不能含有函数等。即便有函数也无法使用。并且**文件名和类名必须一致**。不然都会导致自动加载失败。至于如何发布一个包，这个包里含有函数，而不是只有类。或者这根本不可能实现？以后有时间再研究。心累-_-#
- `myFirstExtensionPackageOfComposer.php`文件就是一个失败的例子。里面既包含了函数，又含有类。并且文件名不是类名。怎么改命名空间都无法使用。搞得我心累-_-#
- `mySecondPackage.php` 文件里有函数，但是没有**命名空间**，只要引入改文件路径，就可以使用里面的函数。我想**是不是函数如果放在文件里，那就不能有命名空间，使用的时候引入文件路径即可。**
- 这些准备好之后，就把这个包提交到`VCS`（版本库）中，然后登陆**packagist**，点击`submit`。
- 大功告成！！！~~~
