{{$register = Package.Raxon.Git:Init:register()}}
{{if(!is.empty($register))}}
{{Package.Raxon.Git:Import:role.system()}}
{{Package.Raxon.Git:Setup:git.install()}}
{{Package.Raxon.Git:Main:sync()}}
{{/if}}