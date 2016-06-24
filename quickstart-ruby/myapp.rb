require "sinatra/base"

class Myapp < Sinatra::Base
  get "/" do
    "Hello world!\n"
  end
end
