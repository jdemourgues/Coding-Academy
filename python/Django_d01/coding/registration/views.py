from django.http import HttpResponse


def index(request):
    return HttpResponse("Hello, world. You're at the registration index.")

def registration(request):
    return HttpResponse("<Register")

def login(request):
    return HttpResponse("Hello, world. You're at the login.")

def logout(request):
    return HttpResponse("Hello, world. You're at the logout.")