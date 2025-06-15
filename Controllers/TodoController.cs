using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using PlanningEvent.Models;

namespace PlanningEvent.Controllers;

public class TodoController : Controller
{
    private readonly ILogger<HomeController> _logger;

    public TodoController(ILogger<HomeController> logger)
    {
        _logger = logger;
    }

    public IActionResult Index()
    {
        return View();
    }
}
