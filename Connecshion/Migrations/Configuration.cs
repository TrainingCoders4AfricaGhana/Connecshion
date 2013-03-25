namespace Connecshion.Migrations
{
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Migrations;
    using System.Linq;
    using System.Web.Security;
    using WebMatrix.WebData;

    internal sealed class Configuration : DbMigrationsConfiguration<Connecshion.Models.UsersContext>
    {
        public Configuration()
        {
            AutomaticMigrationsEnabled = true;
        }

        protected override void Seed(Connecshion.Models.UsersContext context)
        {
            WebSecurity.InitializeDatabaseConnection(
                "DefaultConnection",
                "UserProfile",
                "UserId",
                "UserName", autoCreateTables: true);

            if (!Roles.RoleExists("Administrator"))
                Roles.CreateRole("Administrator");

            if (!WebSecurity.UserExists("selom"))
                WebSecurity.CreateUserAndAccount(
                    "selom",
                    "password",
                    new { Mobile = "+233265330207" });

            if (!Roles.GetRolesForUser("selom").Contains("Administrator"))
                Roles.AddUsersToRoles(new[] { "selom" }, new[] { "Administrator" });
        
        }
    }
}
