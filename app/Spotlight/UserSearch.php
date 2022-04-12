<?php

namespace App\Spotlight;

use App\Models\User;
use LivewireUI\Spotlight\Spotlight;
use LivewireUI\Spotlight\SpotlightCommand;
use LivewireUI\Spotlight\SpotlightCommandDependencies;
use LivewireUI\Spotlight\SpotlightCommandDependency;
use LivewireUI\Spotlight\SpotlightSearchResult;

class UserSearch extends SpotlightCommand
{
    /**
     * This is the name of the command that will be shown in the Spotlight component.
     */
    protected string $name = 'User search';

    /**
     * This is the description of your command which will be shown besides the command name.
     */
    protected string $description = 'Search for a user by username.';

    /**
     * You can define any number of additional search terms (also known as synonyms)
     * to be used when searching for this command.
     */
    protected array $synonyms = ['user', 'users', 'person', 'people', 'member', 'members'];

    /**
     * Defining dependencies is optional. If you don't have any dependencies you can remove this method.
     * Dependencies are asked from your user in the order you add the dependencies.
     */
    public function dependencies(): ?SpotlightCommandDependencies
    {
        return SpotlightCommandDependencies::collection()->add(
            // In this example we will register a 'team' dependency
            SpotlightCommandDependency::make('user')
                // The default Spotlight placeholder will be changed to your dependency place holder
                ->setPlaceholder('For which user do you want to search?')
        );
    }

    /**
     * Spotlight will resolve dependencies by calling the search method followed by your dependency name.
     * The method will receive the search query as the parameter.
     */
    public function searchUser($query)
    {
        return User::where('username', 'like', "%$query%")
            ->get()
            ->map(function (User $user) {
                // You must map your search result into SpotlightSearchResult objects
                return new SpotlightSearchResult(
                    $user->id,
                    $user->username,
                    sprintf('Show details for %s', $user->username)
                );
            });
    }

    /**
     * When all dependencies have been resolved the execute method is called.
     * You can type-hint all resolved dependency you defined earlier.
     */
    public function execute(Spotlight $spotlight, User $user)
    {
        $spotlight->redirectRoute('member.show', $user);
    }

    /**
     * You can provide any custom logic you want to determine whether the
     * command will be shown in the Spotlight component. If you don't have any
     * logic you can remove this method. You can type-hint any dependencies you
     * need and they will be resolved from the container.
     */
    public function shouldBeShown(): bool
    {
        return true;
    }
}
