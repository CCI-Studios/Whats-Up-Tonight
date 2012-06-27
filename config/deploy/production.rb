# repository info
set :branch, "master"

# This may be the same as your `Web` server
role :app, "ccistudios.com"

# directories
set :deploy_to, "/home/wut/subdomains/dev"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[com_wut public template]
