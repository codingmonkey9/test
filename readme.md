# composer 发布扩展包练习

> ### 自己尝试写一个PHP扩展包发布出去，然后目的是能够使用`composer`安装。

- 命名规则：你要发布的包需要按照`厂商名/包名`即`vendor/package`格式命名；厂商名可以去**packagist**搜索一下，确认没有重名再使用。
- 每个组件应该有自己的命名空间。`命名空间`和上面的`命名规则`毫无关系。
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
- 这些准备好之后，就把这个包提交到`VCS`（版本库）中，然后登陆**packagist**，点击`submit`。
- 大功告成！！！~~~